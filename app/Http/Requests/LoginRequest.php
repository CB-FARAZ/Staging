<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool

    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|max:50',
            'role' => 'required|max:255',
            'phone_number' => 'required|min:15',
            'status' => 'required|max:2',
        ];
    }

   public function messages()
   {

       return [
           'email.required' => 'We need to know your e-mail address',
           'name.required' => 'We need to know your name',
           'password.required' => 'We need to know your password',
           'phone_number.required' => 'We need to know your phone number'
           ];
   }
}
