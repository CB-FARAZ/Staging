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
//            'type' => 'required',
            'avatar' => 'required'
        ];
    }

   public function messages(): array
   {

       return [

            'avatar.required' => 'Avatar must type of image',

           ];
   }

}
