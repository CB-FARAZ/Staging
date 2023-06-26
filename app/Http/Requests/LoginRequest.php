<?php

namespace App\Http\Requests;

use App\Models\User;
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

    public function rules(): array
    {
        return [
            'name' => 'required|max:20',
            'email' => 'required|max:50',
            'password' => 'required|max:50',
            'role' => 'required|max:255',
//            'phone_number' => 'required|regex:/(01)[0-9]{9}/',
            'status' => 'required',
//            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

   public function messages(): array
   {

       return [
           'email.required' => 'E-mail is required',
           'name.required' => 'Name is required',
           'password.required' => 'Password is required',
//           'phone_number.required' => 'Phone number is required',
           'role.required' => 'Role is required',
           'status.required' => 'Status is required',
//           'avatar.required' => 'Avatar is required',

           ];
   }

}
