<?php namespace App\Http\Requests\Admin\Posts;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdatePostRequest extends Request
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
        return [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ];
    }
}
