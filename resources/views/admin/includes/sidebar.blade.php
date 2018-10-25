<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		{{-- Normall Activating menu --}}
		{{-- <li class="active"> --}}
			{{-- Dynamically activating menu --}}
			<li {!! request()->is('admin')?'class="active"':'' !!}>
				{{-- <a href="{{ url::to('admin') }}"> --}}
					<a href="{{ url('admin') }}">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>
				</li>
				{{-- For User Management Panel --}}
				<li {!! request()->is('admin/user*')?'class="active open"':'' !!}>
					<a  href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text ">
							User Management
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>



					<ul class="submenu">


						<li {!! request()->is('admin/user/select')?'class="active"':'' !!}>
							<a href="{{ route('admin.user.select') }}">
								<i class="menu-icon fa fa-caret-right"></i>
								List/Select User
							</a>


						</li>

						<li {!! request()->is('admin/user/add')?'class="active"':'' !!}>
							<a href="{{ route('admin.user.add') }}">
								<i class="menu-icon fa fa-caret-right"></i>
								Add User
							</a>

						</li>


					</ul>
				</li>


				{{-- For Category Management Panel --}}
				<li {!! request()->is('admin/category*')?'class="active open"':'' !!}>
					<a  href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text ">
							Category
						</span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					

					<ul class="submenu">
						

						<li {!! request()->is('admin/category/select')?'class="active"':'' !!}>
							<a href="{{ route('admin.category.select') }}">
								<i class="menu-icon fa fa-caret-right"></i>
								List/Select Category
							</a>

							
						</li>

						<li {!! request()->is('admin/category/add')?'class="active"':'' !!}>
							<a href="{{ route('admin.category.add') }}">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Category
							</a>

						</li>

						
					</ul>
				</li>



			</ul><!-- /.nav-list -->

			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>