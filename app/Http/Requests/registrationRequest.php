<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_lastname'         => 'required|min:3|max:35|',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|min:8|max:55|confirmed',
            'password_confirmation' => 'required',
        ];
    }
}
