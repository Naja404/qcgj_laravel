@include('public.header')

		<link rel="stylesheet" href="{{asset('/web_html/css/ace-skins.min.css')}}" />

		<link rel="stylesheet" href="{{asset('/web_html/css/jquery-ui-1.10.3.full.min.css')}}" />


		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="{:C('WEB_HTML_PATH')}css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="{{asset('/web_html/js/ace-extra.min.js')}}"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="{{asset('/web_html/js/html5shiv.js')}}"></script>
		<script src="{{asset('/web_html/js/respond.min.js')}}"></script>
		<![endif]-->
	</head>

	<body>

		@include('public.navbar')

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				@include('public.sidebar')

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="{:C('WEBSITE_URL')}">{{trans('basic.TEXT_HOME_PAGE')}}</a>
							</li>

							<li>
								<a href="{:U('Coupon/rolelist')}">{{trans('role.TEXT_ROLE_MANAGER')}}</a>
							</li>
							<li class="active">{{trans('role.TEXT_ROLE_LIST')}}</li>
						</ul>

					</div>

					<div class="page-content">

						<div class="page-header">
							<button class="btn">
								<a href="#modal-addrole" role="button" data-toggle="modal"><i class="icon-pencil bigger-100">{{trans('role.TEXT_ROLE_ADD')}}</i></a>
							</button>
							<button class="btn">
								<a href="#modal-addrule" role="button" class="white" data-toggle="modal"><i class="icon-pencil bigger-100">{{trans('role.TEXT_ROLE_RULE_ADD')}}</i></a>
							</button>
						</div>

						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Domain</th>
														<th>Price</th>
														<th class="hidden-480">Clicks</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															Update
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													<?php foreach ($roleList as $v):?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">ace.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
													<?php endforeach;?>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
										<?php echo $roleList->render();?>
									</div><!-- /span -->
								</div>
							</div><!-- /.col -->

						</div><!-- /.row -->


						<div id="modal-addrole" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<form id="addrole_form" >
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<div class="modal-content">
									<div class="modal-header no-padding">
										<div class="table-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												<span class="white">&times;</span>
											</button>
											{{trans('role.TEXT_ROLE_ADD')}}
										</div>
									</div>

									<div class="modal-body no-padding">
										<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
											<tbody>
												<tr>
													<td>
														{{trans('role.TEXT_ROLE_NAME')}}
													</td>
													<td>
														<input type="text" name="role_name" />
													</td>
												</tr>

												<tr>
													<td>
														{{trans('role.TEXT_ROLE_RULE')}}
													</td>
													
													<td>

													</td>
													
												</tr>
												@foreach($roleRuleList as $rule)
												<tr>
													<td class="center">
														{{$rule['title']}}
													</td>
													<td>
														@foreach($rule['list'] as $sub)
														<input type="checkbox" name="role_rule[]" id="{{$sub['url']}}" value="{{$sub['rule_id']}}"/><label for="{{$sub['url']}}">{{$sub['title']}}</label><br/>
														@endforeach
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>

									<div class="modal-footer no-margin-top">
										<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
											<i class="icon-remove"></i>
											Close
										</button>


									</div>
								</div><!-- /.modal-content -->
								</form>
							</div><!-- /.modal-dialog -->
						</div>

						<div id="modal-addrule" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<form id="addrule_form">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<div class="modal-content">
									<div class="modal-header no-padding">
										<div class="table-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
												<span class="white">&times;</span>
											</button>
											{{trans('role.TEXT_ROLE_RULE_ADD')}}
										</div>
									</div>

									<div class="modal-body no-padding">

										<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" >
											<tbody>
												<tr>
													<td>
														{{trans('role.TEXT_RULE_MODULE')}}
													</td>
													<td>
														<input type="text" name="module" placeholder="{{trans('role.TEXT_PLACEHOLDER_RULE_MODULE')}}"/>
													</td>
												</tr>
												<tr>
													<td>
														{{trans('role.TEXT_RULE_MODULE_TITLE')}}
													</td>
													<td>
														<input type="text" name="module_title" placeholder="{{trans('role.TEXT_PLACEHOLDER_RULE_MODULE_TITLE')}}"/>
													</td>
												</tr>
												<tr>
													<td>
														{{trans('role.TEXT_RULE_ACTION_TITLE')}}
													</td>
													<td>
														<input type="text" name="action_title" placeholder="{{trans('role.TEXT_PLACEHOLDER_RULE_ACTION_TITLE')}}"/>
													</td>
												</tr>
												<tr>
													<td>
														{{trans('role.TEXT_RULE_ACTION_URL')}}
													</td>
													<td>
														<input type="text" name="action_url" placeholder="{{trans('role.TEXT_PLACEHOLDER_RULE_ACTION_URL')}}"/>
													</td>
												</tr>
												<tr>
													<td>
														{{trans('role.TEXT_RULE_SORT')}}
													</td>
													<td>
														<input type="text" name="sort" placeholder="{{trans('role.TEXT_PLACEHOLDER_RULE_SORT')}}"/>
													</td>
												</tr>

												<tr>
													<td>
														{{trans('role.TEXT_RULE_TYPE')}}
													</td>
													<td>
														<select name="type">
															<option value="1">{{trans('role.TEXT_RULE_TYPE_1')}}</option>
															<option value="2">{{trans('role.TEXT_RULE_TYPE_2')}}</option>
														</select>{{trans('role.TEXT_RULE_TYPE_NOTE')}}
													</td>
												</tr>

											</tbody>
										</table>

									</div>

									<div class="modal-footer no-margin-top">
										<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal" id="addrule_dismiss">
											<i class="icon-remove"></i>
											{{trans('basic.BTN_CLOSE')}}
										</button>

										<button class="btn pull-right" onclick="subAddRuleForm();return false;">
											{{trans('basic.BTN_SUBMIT')}}
										</button>

										<button class="btn btn-info pull-right" type="reset">
											{{trans('basic.BTN_RESET')}}
										</button>

									</div>
								</form>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="{{asset('/web_html/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('/web_html/js/jquery-ui-1.10.3.full.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="{{asset('/web_html/js/jquery-1.10.2.min.js')}}"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{asset('/web_html/js/jquery-2.0.3.min.js')}}'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='{{asset('/web_html/js/jquery-1.10.2.min.js')}}'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='{{asset('/web_html/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
		</script>
		<script src="{{asset('/web_html/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('/web_html/js/typeahead-bs2.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!--  <script src="{{asset('/web_html/js/jquery.dataTables.min.js')}}"></script> -->

		<script src="{{asset('/web_html/js/datatables_1_10_7.js')}}"></script>
		<script src="{{asset('/web_html/js/jquery.dataTables.bootstrap.js')}}"></script>

		<!-- ace scripts -->

		<script src="{{asset('/web_html/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('/web_html/js/ace.min.js')}}"></script>

		<script type="text/javascript">
			function subAddRuleForm(){
				$.ajax({
					type:"POST",
					url:"{{url('Role/addrule')}}",
					data:$('#addrule_form').serialize(),
					success:function(data){

						if (data.status) {
							alert(data.msg);
						}else{
							setTimeout('$("#addrule_dismiss").trigger("click");', 1000);
							$('#addrule_form').each(function(){
								this.reset();
							});
						}
					}
				});
			}

			function subAddRoleForm(){
				$.ajax({
					type:"POST",
					url:"{{url('Role/addrole')}}",
					data:$('#addrole_form').serialize(),
					success:function(data){

						if (data.status) {
							alert(data.msg);
						}else{
							setTimeout('$("#addrole_dismiss").trigger("click");', 1000);
							$('#addrole_form').reset();
						}
					}
				});
			}
		</script>

	</body>
