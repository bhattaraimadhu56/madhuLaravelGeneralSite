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
				<table id="simple-table" class="table  table-bordered table-hover">
						<tr>
							<th><label class="pos-rel">
												<input type="checkbox" class="ace" />
												<span class="lbl"></span></th>
							<th>Created Date</th>
							<th>Email Address</th>
							<th>Status</th>
							<th>Action</th>
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
								<div class="hidden-sm hidden-xs btn-group">
												<button class="btn btn-xs btn-success">
													<i class="ace-icon fa fa-check bigger-120"></i>
												</button>

												<button class="btn btn-xs btn-info">
													<i class="ace-icon fa fa-pencil bigger-120"></i>
												</button>

												<button class="btn btn-xs btn-danger">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</button>

												<button class="btn btn-xs btn-warning">
													<i class="ace-icon fa fa-flag bigger-120"></i>
												</button>
											</div>
										</td>
						</tr>					
						@endforeach
				</table>						
			</div>	<!-- end of col-xs-12 div -->
		</div><!-- row div -->	
	</div><!-- /.page-content -->	
</div><!-- /.main-content -->
@endsection
				
							
					
										
								

								
												
										

		