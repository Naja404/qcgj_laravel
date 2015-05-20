<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\RoleService;

class RoleRuleModel extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'qcgj_role_rule';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['module', 'module_title', 'action_title', 'action_url', 'sort', 'type', 'status', 'created_time'];

	/**
	 * 添加权限规则
	 * @param array $ruleData 权限内容数组
	 * @return mixed
	 */
	public function addrule($ruleData = array()){
		return RoleService::ruleValidator($ruleData);
	}

}
