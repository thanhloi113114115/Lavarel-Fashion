<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class LoginCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'                 =>  'required|email',
            'password'              =>  'required|min:6|max:300',
            
        ];
    }

    public function messages()
    {
        return [
            'email.email'             =>  'Email không đúng định dạng',
            'password.*'              =>  'Mật khẩu phải từ 6 đến 30 ký tự',

        ];
    }
}
