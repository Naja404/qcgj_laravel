<?php namespace App\Http\Controllers;

class WebBasicController extends Controller {

	// ajax返回内容
	public $ajaxRes = array(
				'status' => 1,
				'msg'    => 'ERR_PARAM',
			);

	public function __construct(){
		
	}

	/**
	 * 设置左侧导航
	 */
	private function _setNavBar(){
		
	}

}
