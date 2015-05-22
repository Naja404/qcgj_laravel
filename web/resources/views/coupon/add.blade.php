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
								<a href="{:U('Coupon/rolelist')}">{{trans('coupon.TEXT_COUPON_MANAGER')}}</a>
							</li>
							<li class="active">{{trans('coupon.TEXT_TITLE_LISTVIEW')}}</li>
						</ul>

					</div>

					<div class="page-content">

						<div class="page-header">
							<button class="btn">
								<a href="{{url('Coupon/add')}}" role="button" class="white" data-toggle="modal"><i class="icon-pencil bigger-100">{{trans('role.TEXT_ROLE_RULE_ADD')}}</i></a>
							</button>
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

		<!-- ace scripts -->

		<script src="{{asset('/web_html/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('/web_html/js/ace.min.js')}}"></script>
</body>
