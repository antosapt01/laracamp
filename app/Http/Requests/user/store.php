<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $expiredValidation = date('Y-m', time());
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'card_number' => 'bail:required|min:16|max:16',
            'cvc' => 'required|min:3|max:3',
            'expired' => 'required|date|date_format:Y-m|after_or_equal:'.$expiredValidation,
        ];
    }
}
