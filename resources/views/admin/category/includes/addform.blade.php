

{{-- <form enctype="multipart/form-data"></form></form> --}}
<form name="AddUserForm" id="validateForm"  enctype="multipart/form-data" class="form-horizontal form-actions" role="form" action="{{ route('admin.category.store') }}" method="POST" >
					 @csrf
				<!--	{{-- Adding Field here --}}
					{{-- {!!Form::open(['route'=>'admin.user.store', 'id'=>'validateForm']) !!} --}}-->
						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

							 <div class="col-sm-9">
								 <input type="text" id="title" name="title" placeholder="title" class="col-xs-10 col-sm-5" required=""
										oninvalid="this.setCustomValidity('Plz Enter the title ')" oninput="this.setCustomValidity('')"  />
							 </div>
						 </div>


						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Image </label>

							 <div class="col-sm-9">
								 <input type="file" id="main_image" name="main_image" placeholder="main_image" class="col-xs-10 col-sm-5" required=""
										oninvalid="this.setCustomValidity('Plz Upload the image ')" oninput="this.setCustomValidity('')"  />
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

					
					{{-- <div class="form-group col-sm-3">
						<input type="submit"  value="Submit" class="btn btn-success">  
						&nbsp;
						<input type="reset"  value="Reset" class="btn btn-warning"> 
					</div>	
					--}}
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button  type="submit" class="btn btn-success" >
								
								Add
							</button>

							&nbsp; &nbsp; &nbsp;
							<button type="reset" class=" btn btn-warning" >
								
								Reset
							</button>
						</div>
					</div>


{{-- {!! Form::close() !!} --}}
				</form> <!-- End of form name="AddUserForm"  -->

