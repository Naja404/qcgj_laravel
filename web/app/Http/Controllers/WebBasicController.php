<?php namespace App\Http\Controllers;

use App\Model\WebBasicModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;

class WebBasicController extends Controller {

	// ajax返回内容
	public $ajaxRes = array(
				'status' => 1,
				'msg'    => 'ERR_PARAM',
			);

	public function __construct(){
		View::share('currentController', Route::currentRouteName());
		View::share('currentURL', URL::current());
		View::share('menuArr', $this->_setNavBar());
	}

	/**
	 * 设置左侧导航
	 */
	private function _setNavBar(){
		return WebBasicModel::getNavBar('838ad7c331df1d06b7cf584385d7fcc7');
	}

}
