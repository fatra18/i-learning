<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:8|max:25',
            'email' => 'required|min:8|max:25|email:rfc,|unique:users,email',
            'current_password'=>'required',
            'password' => 'required|min:8|max:25|confirmed',
            'phone_number' => 'required|min:12|max:13|confirmed',
            'title' => 'required|min:8|max:25|confirmed',
            'address' => 'required|min:8|max:100|confirmed',
            'achievement' => 'required|min:8|max:25|confirmed',
            'image' =>'required',
        ];
    }
}
