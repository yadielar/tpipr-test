<?php

namespace App\Http\Requests;

use Auth;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $uri = $this->route()->uri();

        $rules = [
            'name' => 'required',
            'email'=> 'required',
        ];

        if ($uri == 'admin/users') {
            $rules['email'] = 'required|unique:users,email';
            $rules['password'] = 'required';
        }

        return $rules;
    }
}
