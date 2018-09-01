<?php

namespace App\Http\Requests;

use App\Http\Requests\RequestRules\ReservationRequestRule;
use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return ReservationRequestRule::rules();
    }

    public function messages() {
        return [
            'rent.not_in' => '家賃が選択されていません。',
        ];
}
}
