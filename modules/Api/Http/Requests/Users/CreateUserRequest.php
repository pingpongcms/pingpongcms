<?php

namespace Pingpong\Cms\Api\Http\Requests\Users;

use Pingpong\Cms\Api\Http\Requests\Request;

class CreateUserRequest extends Request
{

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|max:255'
        ];
    }
}
