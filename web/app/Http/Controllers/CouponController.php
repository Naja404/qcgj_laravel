<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Lang;

class CouponController extends WebBasicController {

	public function __construct(){
		parent::__construct();

		echo '<pre>';
		print_r($this->currentActionName);exit;
	}

	public function index(){
		// return view('coupon.listview');
	}

	/**
	 * 优惠券列表
	 *
	 */
	public function listview(){
		View::share('pageTitle', Lang::get('coupon.TEXT_TITLE_LISTVIEW'));
		return view('coupon.listview');
	}

	/**
	 * 优惠券添加
	 *
	 */
	public function addCoupon(Request $request){
		View::share('pageTitle', Lang::get('coupon.TEXT_TITLE_ADDCOUPON'));
		if ($request->isMethod('get')) {
			return view('coupon.add');
		}
	}

	/**
	 * 设定页面标题
	 */
	private function _setTitle(){
		View::share('pageTitle', Lang::get('coupon.TEXT_TITLE_'));
	}

}
