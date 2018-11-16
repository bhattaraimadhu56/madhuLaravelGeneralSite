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
                    @include('admin.user.includes.editform')

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

                    username: {
                        required: true,
                        minlength: 2,
                        maxlength: 8
                    },

                    email: {
                        required: true,
                        email: true
                    },

                    full_name:{ required:true, minlength: 5, maxlength: 25},
                    contact_no: "required",
                    address:"required",
                    gender: "required",
                    status:"required",

                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },

                    // topic: {
                    // 	required: "#newsletter:checked",
                    // 	minlength: 2
                    // },

                    //agree: "required"
                }, // end of rule
                messages: {
                    username: {
                        required: "Plz enter a username",
                        minlength: "Your username must consist of at least 2 characters",
                        maxlength: "Your username must not exceed more than 8 characters"
                    },

                    email: "Plz enter a valid email address",

                    full_name:{
                        required:"Plz enter your full name",
                        minlength: "Your full name must consist of at least 5 characters",
                        maxlength: "Your full name must not exceed more than 25 characters"},
                    //lastname: "Please enter your lastname",

                    password: {
                        required: "Plz provide a password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    confirm_password: {
                        required: "Plz provide a password",
                        minlength: "Your password must be at least 6 characters long",
                        equalTo: "Plz enter the same password as above"
                    },

                    //agree: "Please accept our policy",
                    //topic: "Please select at least 2 topics"
                    contact_no: "Plz provide the contact number",
                    address:"Plz provide the address",
                    gender: "Plz select the gender",
                    status:"Plz choose your status"
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
                unhighlight: function(element) {
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

