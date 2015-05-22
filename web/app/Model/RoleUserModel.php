<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\RoleModel;

class RoleUserModel extends Model {
	// 默认表名
	protected $table = 'qcgj_role_user';
	// 定义主键
	protected $primaryKey = 'user_id';
	// 自定义主键属性
	public $incrementing = false;
	// 关闭默认时间字段
	public $timestamps = false;
	// 字段白名单
	protected $fillable = ['user_id', 'role_id', 'name', 'create_time'];

	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	public function role(){
		return $this->hasOne('App\Model\RoleModel', 'role_id', 'role_id');
	}

	public function roleRule(){
		return $this->hasMany('App\Model\RoleRule');
	}

}
