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
				@include('admin.user.includes.addform')
				
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page content -->
</div><!-- /.main-content -->
@endsection


@section('js')
<script src="{{ asset('adminPanel/assets/js/jquery.validate.min.js') }}"></script>
<script>
$(document).ready(function(){
$(#validateForm).validate({
rules:{
	"username":{
		required:true,
		minlength:3
		}
},

messages:{
	"username":{
		required:"Plz provide the username",
		minlength:"Plz enter username atlest length of 3"
	}


}



})

});	


</script>
@endsection
