<?php

namespace Cms\Core\Http\Requests\Auth;

use Cms\Core\Http\Requests\Request;

class RegisterRequest extends Request {

	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'name' => 'required|max:255',
			'username' => 'required|max:30|unique:users',
			'email' => 'required|max:255|unique:users',
			'password' => 'required|max:30|confirmed',
			'aggree' => 'accepted',
		];
	}

}