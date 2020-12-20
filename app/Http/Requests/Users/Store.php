<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest 
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
			'ip_address' => 'required|max:15',
			'username' => 'required|max:100',
			'salt' => 'required|max:225',
			'email' => 'required|max:100',
			'activation_code' => 'required|max:40',
			'forgotten_password_code' => 'required|max:40',
			'forgotten_password_time' => 'required|numeric',
			'remember_code' => 'required|max:40',
			'created_on' => 'required|numeric',
			'last_login' => 'required|numeric',
			'active' => 'required|numeric',
			'full_name' => 'required|max:225',
			'photo' => 'required|max:225',
			'additional' => 'required|string',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
     
        ];
    }

}
