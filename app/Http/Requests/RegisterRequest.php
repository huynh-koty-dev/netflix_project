<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email_register' => 'required|email|unique:users,email',
            'nameUser' => 'required|min:4|max:20',
            'password' => 'required|min:6|max:20|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'repassword' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email_register.required' => __('request.email_required'),
            'email_register.email' => __('request.email_email'),
            'email_register.unique' => __('request.email_exist'),
            'nameUser.required' => __('request.name_user_required'),
            'nameUser.min' => __('request.name_min'),
            'nameUser.max' => __('request.name_max'),
            'password.required' => __('request.password_required'),
            'password.min' => __('request.pass_min'),
            'password.max' => __('request.pass_max'),
            'password.regex:/(^([a-zA-Z]+)(\d+)?$)/u' => __('request.pass_regex'),
            'repassword.required' => __('request.repassword_required'),
            'repassword.same:password' => __('request.repass_same'),
        ];
    }
}
