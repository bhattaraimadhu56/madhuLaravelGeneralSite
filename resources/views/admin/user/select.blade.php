@extends('admin.layout.adminMasterLayout')


@section('content')

<div class="main-content">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="{{ route('admin.dashboard.index') }}">Home</a>
				</li>
s
				<li>
					<a href="{{ route('admin.user.select') }}">User</a></a>
				</li>
				<li class="active">List/Select User</li>
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
    <div>
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
        @if(Session::has($key))
            <p class="alert alert-{{ $key }}">
                {{ Session::get($key) }}
            </p>
        @endif
        {{--Reference
       @if(Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif--}}
    @endforeach
    </div>
                {{--For adding User Button--}}
                <div class="pull-right font-weight-bold">
                    <a href="{{ route('admin.user.add') }}">
                    <b class="btn btn-sm btn-success"> <i class="  glyphicon glyphicon-plus"> Add User</i></b>
                   </a>
                </div>

				<table id="simple-table" class="table  table-bordered table-hover">
						<tr class="bg-info">
							<th ><label class="pos-rel">
												<input type="checkbox" class="ace" />
                                    <span class="lbl"></span></label></th>
							<th class="align-center">Created Date</th>
							<th class="align-center">Email Address</th>
							<th class="align-center">Status</th>
							<th class="align-center">Action</th>
						</tr>
						{{-- Method 1 Using  $DatafromUserAnyName within with function to carry dta to view --}}
						{{-- @foreach($DatafromUserAnyName as $key=>$a) --}}
						{{-- @foreach($DatafromUserAnyName as $a) --}}

						{{-- Method 2 Using Compact Function --}}
						{{-- @foreach($data as $key=>$a) --}}
						@foreach($data as $a)
						<tr> 
							<td><label class="pos-rel">
												<input type="checkbox" class="ace" />
												<span class="lbl"></span></td>
							<td>{{ $a->created_at }}</td>
							<td>{{ $a->email }}</td>
							<td>

							 @if($a->status==1)
							 {{-- will show green (success) color if active --}}
							 <span class="label label-sm label-success">Active</span>
							 @else
							  {{-- will show warning color if active --}}
							  <span class="label label-sm label-warning">Inactive</span>

							 @endif
							</td>
							<td>


                                                    <a href="{{ route('admin.category.select') }}">
                                                        <b class="btn btn-xs btn-primary">
                                                            <i class="glyphicon glyphicon-eye-open">View

                                                            </i>
                                                        </b>
                                                    </a>




                                {{--By URL method--}}
                                <a href="{{URL::to('admin/user/edit/'.$a->id)}}">
                                    {{--By Route method--}}
                                                    {{--<a href="{{route('admin.user.edit'.$a->id)}}">--}}
                                                       <b class="btn btn-xs btn-warning"> <i class="glyphicon glyphicon-pencil">Edit</i>
                                                       </b>
                                                    </a>





                                                         {{--By URL method--}}
														<a href="{{URL::to('admin/user/delete/'.$a->id)}}"
                                                        {{--<a href="{{ route('admin.user.delete',['id'=>$a->id])}}"--}}
														   onclick=" return confirm('Are you sure, You want to delete permanently?')">
                                                            <b class="btn btn-xs btn-danger">   <i class="ace-icon fa fa-trash-o bigger-120">Delete</i>
                                                            </b>
                                                        </a>





										</td>
						</tr>					
						@endforeach
				</table>						
			</div>	<!-- end of col-xs-12 div -->
		</div><!-- row div -->	
	</div><!-- /.page-content -->	
</div><!-- /.main-content -->
@endsection

@section('toastMessage')
<!-- For Toast Message-->
{{-- normally write in header section--}}
		<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
{{-- normally write in body section--}}
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

		{{-- For Toast Message --}}
	<script>
	@if(Session::has('message'))

	var type="{{Session::get('alert-type','info')}}";


	switch(type){
	case 'info':
	toastr.info("{{Session::get('message')}}");
	break;

	case 'success':
	toastr.success("{{Session::get('message')}}");
	break;

	case 'warning':
	toastr.warning("{{Session::get('message')}}");
	break;

	case 'error':
	toastr.error("{{Session::get('message')}}");
	break;
	toastr.info("{{ Session::get('message') }}");
	break;
	case 'success':
	toastr.success("{{ Session::get('message') }}");
	break;
	case 'warning':
	toastr.warning("{{ Session::get('message') }}");
	break;
	case 'error':
	toastr.error("{{ Session::get('message') }}");
	break;
	}
	@endif

	</script>		
	@endsection						
					
										
								

								
												
										

