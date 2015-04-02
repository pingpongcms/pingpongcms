<?php namespace App\Http\Requests\Admin\Users;

use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{

    protected $rules = [];
    
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
        $rules = [
            'name' => 'required',
            'username' => 'required|unique:users,username.' . $this->segment(3),
            'email' => 'required|unique:users,email,' . $this->segment(3),
            'password' => 'required|confirmed',
        ];

        array_forget($this->rules, ['password']);

        if ($this->has('password')) {
            $this->rules['password'] = $rules['password'];
        }

        return $this->rules;
    }
}
