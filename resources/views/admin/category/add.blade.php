@extends('admin.layout.adminMasterLayout')

@section('content')

<div class="main-content">
	
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="{{ route('admin.dashboard.index') }}">Home</a>
			</li>

			<li>
				<a href="{{ route('admin.category.select') }}">Category</a></a>
			</li>
			<li class="active">Add</li>
		</ul><!-- /.breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="ace-icon fa fa-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- /.nav-search -->
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Text Field </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="button">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Submit
							</button>

							&nbsp; &nbsp; &nbsp;
							<button class="btn" type="reset">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Reset
							</button>
						</div>
					</div>

					



			
			
				</form>



			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page content -->
</div><!-- /.main-content -->




@endsection
