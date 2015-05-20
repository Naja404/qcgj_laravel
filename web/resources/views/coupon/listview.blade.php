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

		<include file="Public:navbar" />
		@include('public.navbar');

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<include file="Public:sidebar" />
				@include('public.sidebar')

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="{:C('WEBSITE_URL')}">{:L('TEXT_HOME_PAGE')}</a>
							</li>

							<li>
								<a href="{:U('Coupon/listview')}">{:L('TEXT_COUPON_MANAGER')}</a>
							</li>
							<li class="active">{:L('TEXT_COUPON_LIST')}</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">

						<div class="row">
							<div class="col-xs-12">

								<div class="row">
									<div class="col-xs-12">
										<div class="table-header">
											{:L('TEXT_COUPON_LIST')}
										</div>

										<div class="table-responsive">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>{:L('TEXT_COUPON_NAME')}</th>
														<th>{:L('TEXT_COUPON_EXPIRE_DATE')}</th>
														<th>{:L('TEXT_COUPON_STATUS')}</th>
														<th>{:L('TEXT_COUPON_SHOPCOUNT')}</th>
														<th>{:L('TEXT_COUPON_RECEIVECOUNT')}</th>
														<th>{:L('TEXT_COUPON_USECOUNT')}</th>
														<th>{:L('TEXT_COUPON_OPERATION')}</th>
													</tr>
												</thead>
											</table>
										</div>
									</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {

				var oTable1 = $('#sample-table-2').dataTable({

		            "processing": true,
		            "serverSide": true,
		            "ajax": "{{url('Coupon/ajaxCouponList')}}",
					"aoColumns": [
				      { "bSortable": false },
				      null, null,null, null, null,null,
					  { "bSortable": false }]
				});


				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});

				});


				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}

				$( "#Startdatepicker" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false
				});
				$( "#Enddatepicker" ).datepicker({
					showOtherMonths: true,
					selectOtherMonths: false
				});
			})
		</script>
	</body>

<include file="Public:footer" />
