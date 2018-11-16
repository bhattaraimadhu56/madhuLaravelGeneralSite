<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'=>'required',
            'email'=>'required | email| unique:users,email',
           'password'=>'required | min:6',
           // 'contact_no'=>'required',
           // 'address'=>'required',
            //'status'=>'required'
           
        ];
    }
    public function messages()
    {
        return [
            //
            'name.required'=>'Enter username',
              'email.required'=>'Enter valid email address',
             'password.required'=>'Enter Password',
            // 'contact_no'=>'required',
            // 'address'=>'required',
            //'status'=>'required'

        ];
    }
}
