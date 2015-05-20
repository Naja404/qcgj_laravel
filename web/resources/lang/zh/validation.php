<?php
return [
		'custom' => [
				'module' => [
				'required' => '模块不能为空',
				'max' => '模块字符过长',
				],
				'module_title' => [
				'required' => '模块标题不能为空',
				'max'      => '模块标题字符过长',
				'unique'   => '模块标题已存在',
				],
				'action_title' => [
				'required' => '操作标题不能为空',
				'max'      => '模块标题字符过长',
				'unique'   => '模块标题已存在',
				],
				'action_url' => [
				'required' => '操作URL不能为空',
				'max'      => '操作URL字符过长',
				'unique'   => '操作URL已存在',
				],
				'sort' => [
				'required' => '排序不能为空',
				'max'      => '排序字符过长',
				'numeric'   => '排序必须为数字',
				],
				'type' => [
				'required' => '类型不能为空',
				'numeric' => '类型必须为数字',
				],
		],
	];

?>
