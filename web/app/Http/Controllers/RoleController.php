<?php namespace App\Http\Controllers;

use App\Model\RoleModel;
use Illuminate\Http\Request;
use View;
use Lang;

class RoleController extends WebBasicController {

	public $roleModel;

	public function __construct(){
		parent::__construct();
		$this->roleModel = new RoleModel;
	}

	public function index(){

	}

	public function roleList(){
		$roleRuleList = $this->roleModel->roleRuleList();

		$roleList = $this->roleModel->roleList();

		View::share('pageTitle', Lang::get('role.TEXT_TITLE_ROLELIST'));

		return view('role.rolelist', ['roleList' => $roleList, 'roleRuleList' => $roleRuleList]);
	}

	/**
	 * 添加权限规则
	 */
	public function addRule(Request $request){
 
		$returnRes = $this->roleModel->addRule($request->input());

		if ($returnRes['error']) {
			$this->ajaxRes['msg'] = $returnRes['msg'];
		}else{
			$this->ajaxRes = [
				'status' => 0,
			];
		}

		return response()->json($this->ajaxRes);
	}

	/**
	 * 添加角色
	 */
	public function addRole(){

	}

}
