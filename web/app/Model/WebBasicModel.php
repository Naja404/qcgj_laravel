<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WebBasicModel extends Model {

	//返回内容
	public $returnRes = ['error' => false, 'msg' => [], 'data' => []];

	/**
	 * 查询菜单
	 * @param string $userID 用户id
	 */
	static public function getNavBar($userID = false){
		$navMenu = DB::table('qcgj_role_rule')->where('type', '=', 1)->orderBy('sort', 'desc')->get();
			
		$menuArr = array();

		foreach ($navMenu as $k => $v) {

			if (!in_array($v->module, array_keys($menuArr))) {
				$menuArr[$v->module] = [
					'title' => $v->module_title,
				];
			}

			$menuArr[$v->module]['list'][] = [
				'title'  => $v->action_title,
				'url'    => url($v->action_url),
			];
		}

		return $menuArr;
	}

}
