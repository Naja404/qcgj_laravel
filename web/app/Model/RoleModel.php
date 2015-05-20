<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\RoleService;

class RoleModel extends Model {

	protected $table = 'qcgj_role_user';
	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	/**
	 * 添加权限规则
	 * @param array $ruleData 权限内容数组
	 * @return mixed
	 */
	public function addrule(array $ruleData){
		$this->table = 'qcgj_role_rule';
		// unset($ruleData['_token']);
		$ruleValidator = RoleService::ruleValidator($ruleData, $this->table);

		if ($ruleValidator->fails()) {
			
			$validatorErr = $ruleValidator->errors()->all();

			$this->returnRes = [
				'error' => true,
				'msg'   => $validatorErr[0],
				'data'  => [],
			];
			
			return $this->returnRes;
		}
		
		$ruleData['status'] = 1;
		$ruleData['created_time'] = time();

		$roleModel = RoleModel::insert($ruleData);

		$this->returnRes['error'] = $roleModel === true ? false : true;

		return $roleModel;
	}

	/**
	 * 添加用户
	 * @param array $userData 用户内容数组
	 * @return mixed
	 */
	public function addUser($userData = array()){

	}

}
