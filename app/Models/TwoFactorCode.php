<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stevebauman\Location\Facades\Location;

class TwoFactorCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'country',
        'code',
    ];

    protected static function booted()
    {
        static::creating(function ($code) {
            $location = Location::get(request()->ip());
            $code->ip = request()->ip();
            $code->country = $location->countryName . ' | ' . $location->countryCode . ' | ' . $location->regionName . ' | ' . $location->regionCode;
        });
    }
}
