

{{-- <form enctype="multipart/form-data"></form></form> --}}
<form name="EditUserForm" id="validateForm" class="form-horizontal form-actions" role="form" action="{{ URL::to('admin/user/update/'.$viewData->id) }}" method="POST" >
					 @csrf
				<!--	{{-- Adding Field here --}}
					{{-- {!!Form::open(['route'=>'admin.user.store', 'id'=>'validateForm']) !!} --}}-->
						 <div class="form-group">
							 <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

							 <div class="col-sm-9">
								 <input type="text" id="username" name="username" value="{{$viewData->name}}" class="col-xs-10 col-sm-5" required=""
										oninvalid="this.setCustomValidity('Plz Enter the username ')" oninput="this.setCustomValidity('')"  />
							 </div>
						 </div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Contact No. </label>

						<div class="col-sm-9">
							<input type="text" id="contact_no" name="contact_no"  value="{{$viewData->contact_no}}" class="col-xs-10 col-sm-5"
						    required=""oninvalid="this.setCustomValidity('Plz Enter the contact number ')" oninput="this.setCustomValidity('')"  />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

						<div class="col-sm-9">
							<input type="text" id="address" name="address" value="{{$viewData->address}}" class="col-xs-10 col-sm-5" required=""
							 oninvalid="this.setCustomValidity('Plz Enter the address ')" oninput="this.setCustomValidity('')"  />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

						<div class="col-sm-9">
							<input type="email" id="email" name="email" value="{{$viewData->email}}" class="col-xs-10 col-sm-5" required=""data-validation="email"
		 					data-validation-error-msg="You did not enter a valid e-mail" 
		 					data-validation-error-msg-container="#email-error-dialog"> 
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

						<div class="col-sm-9">
							<input type="password" id="password" name="password" value="{{$viewData->password}}" class="col-xs-10 col-sm-5" required=""oninvalid="this.setCustomValidity('Plz Enter the password ')" oninput="this.setCustomValidity('')"  />
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

