<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,array<string>>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'avatar' => 'required',
        ];
    }


    public function messages()
    {
        return [

            'avatar' => 'You must fill this field with your avatar',
            'image' => 'This field contains only jpeg,png,jpg,gif,svg'
        ];
    }

}
