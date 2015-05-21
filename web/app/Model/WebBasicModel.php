<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class WebBasicModel extends Model {

	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	/**
	 * 查询菜单
	 * @param string $userID 用户id
	 */
	public function getNavBar($userID = false){
		
	}

}
