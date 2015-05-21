				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<ul class="nav nav-list">
						<li>
							<a href="#">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> {{trans('basic.TEXT_MENU')}} </span>
							</a>
						</li>
						@foreach ($menuArr as $v)
						<li class="@if ($currentController == $v['module'])active open @endif">
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> {{$v['title']}} </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								@foreach($v['list'] as $sub)
								<li class="@if ($currentURL == $sub['url'])active @endif">
									<a href="{{$sub['url']}}">
										<i class="icon-double-angle-right"></i>
										{{$sub['title']}}
									</a>
								</li>
								@endforeach
							</ul>
						</li>
						@endforeach


					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
