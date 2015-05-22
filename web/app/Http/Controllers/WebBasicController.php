<?php namespace App\Http\Controllers;

use App\Model\WebBasicModel;
use View;
use URL;
use Route;

class WebBasicController extends Controller {

	// ajax返回内容
	public $ajaxRes = array(
				'status' => 1,
				'msg'    => 'ERR_PARAM',
			);
	// 当前方法名
	public $currentActionName;

	public function __construct(){
		$this->_assignProperty();
	}

	/**
	 * 设置左侧导航
	 */
	private function _setNavBar(){
		return WebBasicModel::getNavBar('838ad7c331df1d06b7cf584385d7fcc7');
	}

	/**
	 * 定义常用属性
	 */
	private function _assignProperty(){
		$this->currentActionName = Route::currentRouteActionName();
		View::share('currentController', Route::currentRouteName());
		View::share('currentURL', URL::current());
		View::share('menuArr', $this->_setNavBar());
	}
}
