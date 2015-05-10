<?php

namespace Cms\Api\Http\Requests\Users;

use Cms\Api\Http\Requests\Request;

class UpdateUserRequest extends Request
{

    public function rules()
    {
        $id = $this->segment(3);

        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|unique:users,email,'.$id,
            'username' => 'required|unique:users,username,'.$id,
        ];

        if ($this->has('password')) {
            $rules['password'] = 'required|max:255';
        }

        return $rules;
    }
}
