<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoleUserModel extends Model {
	// 默认表名
	protected $table = 'qcgj_role_user';
	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	/**
	 *
	 *
	 */
	public function role(){
		return $this->hasMany('App\Model\Role');
	}

	public function roleRule(){
		return $this->hasMany('App\Model\RoleRule');
	}

}
