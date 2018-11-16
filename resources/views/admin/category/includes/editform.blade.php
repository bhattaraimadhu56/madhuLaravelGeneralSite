

{{-- <form enctype="multipart/form-data"></form></form> --}}

<form name="EditUserForm" id="validateForm" enctype="multipart/form-data" class="form-horizontal form-actions" role="form" action="{{ URL::to('admin/category/update/'.$viewData->id) }}" method="POST" >
					 @csrf
				<!--	{{-- Adding Field here --}}
					{{-- {!!Form::open(['route'=>'admin.user.store', 'id'=>'validateForm']) !!} --}}-->
						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

							 <div class="col-sm-9">
								 <input type="text" id="title" name="title" value="{{$viewData->title}}" class="col-xs-10 col-sm-5" required=""
										oninvalid="this.setCustomValidity('Plz Enter the title ')" oninput="this.setCustomValidity('')"  />
							 </div>
						 </div>

						 @if(isset($viewData->image))
						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Existing Image </label>

							 <div class="col-sm-9">
								 @if($viewData->image)
									 <img src="{{asset('adminPanel/images_uploaded_database/category/'.$viewData->image)}}" height="50" width="50" align="center">
								 @else
									 <p> No Image</p>
								 @endif
							 </div>
						 </div>
						 @endif
						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

							 <div class="col-sm-9">
								 <input type="file" id="main_image" name="main_image"  class="col-xs-10 col-sm-5"   />
							 </div>
						 </div>

						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

							 <div class="col-sm-9">
								 {{-- value ma either 1 or 0 pass garne kina ki yo tinybit ho database ma ok --}}
								 <input type="radio" name="status"  value="1" /> Active
								 <br>
								 <input type="radio" name="status"  value="0"  /> Inactive
							 </div>
						 </div>

						 <div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button  type="submit" class="btn btn-success" >
								
								Update
							</button>

							&nbsp; &nbsp; &nbsp;
							<button type="reset" class=" btn btn-warning" >
								
								Reset
							</button>
						</div>
					</div>


{{-- {!! Form::close() !!} --}}
				</form> <!-- End of form name="AddUserForm"  -->

