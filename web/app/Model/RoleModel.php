<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\RoleService;
use App\Model\RoleRuleModel;

class RoleModel extends Model {

	// 默认表名
	protected $table = 'qcgj_role_user';
	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	/**
	 * 添加权限规则
	 * @param array $ruleData 权限内容数组
	 * @return mixed
	 */
	public function addRule(array $ruleData){
		$this->_setRoleRuleTable();
		unset($ruleData['_token']);

		$ruleValidator = RoleService::ruleValidator($ruleData, $this->table);

		if ($ruleValidator->fails()) {
			
			$validatorErr = $ruleValidator->errors()->all();

			$this->returnRes = [
				'error' => true,
				'msg'   => $validatorErr[0],
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
	 * 角色列表
	 */
	public function roleList(){
		$this->_setRoleRuleTable();

		return RoleModel::paginate(1);
	}

	/**
	 * 权限规则列表
	 */
	public function roleRuleList(){

		$queryRes = RoleRuleModel::where('status', '=', 1)->orderBy('sort', 'desc')->get();

		$roleRuleList = array();

		foreach ($queryRes as $k => $v) {
			if (!in_array($v->module, array_keys($roleRuleList))) {
				$roleRuleList[$v->module] = [
					'title'  => $v->module_title,
				];
			}

			$roleRuleList[$v->module]['list'][] = [
				'title'   => $v->action_title,
				'rule_id' => $v->id,
				'url'     => $v->action_url,
			];
		}

		return $roleRuleList;
	}

	/**
	 * 添加用户
	 * @param array $userData 用户内容数组
	 * @return mixed
	 */
	public function addUser($userData = array()){

	}

	/**
	 * 设置数据表
	 */
	private function _setRoleRuleTable(){
		$this->table = 'qcgj_role_rule';
	}

}
