<?php

namespace Pingpong\Cms\Core\Http\Requests\Auth;

use Pingpong\Cms\Core\Http\Requests\Request;

class LoginRequest extends Request
{

    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }
}
