<?php namespace App\Http\Controllers;

use App\Model\RoleModel;
use Illuminate\Http\Request;

class RoleController extends WebBasicController {

	public $roleModel;

	public function __construct(){
		$this->roleModel = new RoleModel;
	}

	public function index(){
		// return view('coupon.listview');
	}

	public function rolelist(){
		return view('role.rolelist');
	}

	/**
	 * 添加权限规则
	 */
	public function addrule(Request $request){

		$returnRes = $this->roleModel->addrule($request->input());

		if ($returnRes['error']) {
			$this->ajaxRes['msg'] = $returnRes['msg'];
		}else{
			$this->ajaxRes = [
				'status' => 0,
			];
		}

		return response()->json($this->ajaxRes);
	}


}
