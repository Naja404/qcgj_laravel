<?php namespace App\Services;

use App\Model\RoleModel;
use App\Model\RoleRuleModel;
use Validator;

class RoleService {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	static public function ruleValidator(array $data, $tableName){

		return Validator::make($data, [
			'module'       => 'required|max:32',
			'module_title' => 'required|max:255|unique:'.$tableName,
			'action_title' => 'required|max:255|unique:'.$tableName,
			'action_url'   => 'required|max:255|unique:'.$tableName,
			'sort'         => 'required|numeric',
			'type'         => 'required|numeric',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function ruleCreate(array $data)
	{
		return RoleRule::create([$data]);
	}

}
