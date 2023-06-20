<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {


        return [

            'name' => 'required',
            //ternary operator check if request is PATCH(update) user_id id required. and if request is POST(store) we don t need user_id
            'email'=> $this->method() === self::METHOD_PATCH? 'required|email|unique:users,email,' . $this->user->id :  'required|email|unique:users,email',
            'family' => 'required',
            'password'=> 'required',

        ];
    }
}
