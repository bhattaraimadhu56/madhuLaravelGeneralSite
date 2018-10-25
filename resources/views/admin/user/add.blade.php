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
				<a href="{{ route('admin.user.select') }}">User</a></a>
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
				<form name="AddUserForm" class="form-horizontal form-actions" role="form" action="#" method="POST" >
					@csrf
					{{-- Adding Field here --}}
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

						<div class="col-sm-9">
							<input type="text" id="username" name="username" placeholder="Username" class="col-xs-10 col-sm-5"  required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

						<div class="col-sm-9">
							<input type="email" id="email" name="email" placeholder="Enter valid Email" class="col-xs-10 col-sm-5" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

						<div class="col-sm-9">
							<input type="password" id="form-field-1" placeholder="Password" class="col-xs-10 col-sm-5" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Full Name </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Full Name" class="col-xs-10 col-sm-5" required=""/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No. </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Contact Number" class="col-xs-10 col-sm-5" required=""/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-5" required=""/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

						<div class="col-sm-9">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female" selected="selected">Female</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

						<div class="col-sm-9">
							<input type="radio" name="gender"  value="Active" /> Active 
							<br>
							<input type="radio" name="gender"  value="Inactive" checked="checked" /> Inactive
						</div>
					</div>

					
					{{-- <div class="form-group col-sm-3">
						<input type="submit"  value="Submit" class="btn btn-success">  
						&nbsp;
						<input type="reset"  value="Reset" class="btn btn-warning"> 
					</div>	
 --}}
 					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button  type="submit" class="btn btn-success" >
								
								Submit
							</button>

							&nbsp; &nbsp; &nbsp;
							<button type="reset" class=" btn btn-warning" >
								
								Reset
							</button>
						</div>
					</div>



				</form> <!-- End of form name="AddUserForm"  -->


				



			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page content -->
</div><!-- /.main-content -->




@endsection
