<?php

Route::get('/', 'WelcomeController@index');

// coupon 优惠券管理分组
Route::group(['prefix' => 'Coupon', 'as' => 'Coupon'], function(){
	Route::get('list', 'CouponController@listview');
	Route::any('add', 'CouponController@addCoupon');
});

// role 权限管理分组
Route::group(['prefix' => 'Role', 'as' => 'Role'], function(){
	Route::get('rolelist', 'RoleController@rolelist');
	Route::post('addrule', 'RoleController@addRule');
});
