<?php

namespace App\Http\Requests\RequestRules;

class ReservationRequestRule
{
    public static function rules()
    {
        return [
            'old_address' => 'required|string|max:255',
            'new_address' => 'required|string|max:255',
            'rent' => 'required|string',
            'house' => 'required|mimes:jpeg,png',
            'other' => 'required|string|max:255',
        ];
    }
}