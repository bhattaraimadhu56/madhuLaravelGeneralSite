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
					@include('admin.category.includes.addform')

				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page content -->
	</div><!-- /.main-content -->
	@endsection

	{{-- check it doesn't work because insted of 'pageSpecificJS' i have used 'js'--}}
	{{-- @yield('pageSpecificJS') defined in C:\xampp\htdocs\madhuLaravelGeneralSite\resources\views\admin\layout\adminMasterLayout.blade.php --}}
	@section('pageSpecificJS')


	{{-- <script src="{{asset('/adminPanel/assets/js/jquery-2.1.4.min.js')}}"></script> --}}
	<script src="{{ asset('adminPanel/assets/js/jquery.validate.min.js') }}"></script>
	{{-- Method : using jquery plugin  --}}
	<script>

	$(document).ready(function()
	{
		//$(document).ready(function(){ may not necessary


		$("#validateForm").validate({
			rules: {


					title:{ required:true, minlength: 5},
					image: "required"
				}, // end of rule
				messages: {
					title: {
						required: "Plz enter a tile",
						minlength: "Your username must consist of at least 5 characters"

					},

					image: "Plz upload a valid image",


				},// end of message

				 errorClass: 'help-block',
				//errorClass:' alert-success',
				// background danger
				//errorClass:'bg-danger',

				// Called when the element is invalid:

			highlight: function(element) {
				//$(element).css('background', '#ffdddd');
				$(element).closest('.col-sm-9').addClass('has-error');
				//$(element).css('color', 'red');
				//$(element).css('background', 'red');
				//$(element).css({ 'color': 'red', 'font-size': '150%' });


			},

			// Called when the element is valid:

			Unhighlight: function(element) {
				//$(element).css('background', '#ffdddd');
				$(element).closest('.form-group').removeClass('has-error');
				//$(element).css('color', 'red');
				//$(element).css('background', 'red');
				//$(element).css({ 'color': 'red', 'font-size': '150%' });

			},





	}); // end of $(#validateForm).validate({

	});

	</script>


	@endsection

