<?php namespace Transorder\Http\Requests\Auth;

use Transorder\Http\Requests\Request;

class Register extends Request {

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
			'username' => ['required', 'min:3', 'unique:users'],
            'password' => ['required', 'confirmed'],
            'name' => ['required'],
            'address' => ['required'],
            'phone_number' => ['required', 'unique:user_details'],
            'email' => ['required', 'email', 'unique:user_details'],
            'photo' => ['required', 'image']
		];
	}

}
