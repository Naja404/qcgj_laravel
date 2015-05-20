<?php namespace App\Http\Controllers;

class CouponController extends Controller {

	public function __construct()
	{
		// $this->middleware('auth');
	}

	public function index(){
		// return view('coupon.listview');
	}

	public function listview(){
		return view('coupon.listview');
	}

}
