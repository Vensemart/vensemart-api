
@extends('app')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- jquery validation -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Edit User</h3> </div>
						<!-- /.card-header -->
						<!-- form start -->
						<form id="quickForm" action="{{  url('admin/new-user/edit').'/'.$user->id}}" method="post" enctype="multipart/form-data">
							@csrf
						<div class="card-body">
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="name"> Name </label>
											<input type="text" name="name" value="{{ old('name',$user->name) }}" class="form-control" id="name" placeholder="Enter Category Name"> 
    										@if ($errors->has('name'))
                                              <span class="text-danger">{{ $errors->first('name') }}</span>
                                             @endif
										</div>
								    </div>
								    <div class="col-md-6">
										<div class="form-group">
											<label for="email"> Email </label>
											<input type="email" readonly name="email" value="{{ old('email',$user->email) }}" class="form-control" id="email" placeholder="Enter Email"> 
    										@if ($errors->has('email'))
                                              <span class="text-danger">{{ $errors->first('email') }}</span>
                                             @endif
										</div>
								    </div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="mobile"> Mobile </label>
											<input type="number" name="mobile" value="{{ old('mobile',$user->mobile) }}" class="form-control" id="mobile" placeholder="Enter Mobile Number"> 
    										@if ($errors->has('mobile'))
                                              <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                             @endif
										</div>
								    </div>
								  <!--  <div class="col-md-6">-->
										<!--<div class="form-group">-->
										<!--	<label for="password"> Password </label>-->
										<!--	<input type="password" name="password" value="{{ old('password') }}" class="form-control" id="name" placeholder="Enter Password"> -->
    						<!--				@if ($errors->has('password'))-->
          <!--                                    <span class="text-danger">{{ $errors->first('password') }}</span>-->
          <!--                                   @endif-->
										<!--</div>-->
								  <!--  </div>-->
								  <div class="col-md-6">
										<div class="form-group">
											<label for="image">Profile Image </label>
											<input type="file" name="image" class="form-control" id="image" placeholder="Enter Image"> 
										 @if ($errors->has('image'))
                                          <span class="text-danger">{{ $errors->first('image') }}</span>
                                         @endif
										</div>
									    
									</div>
								</div>
								<div class="row">
									
								
									<div class="col-md-6">
										<div class="form-group">
											<label for="name">Status</label>
											<select name="status" class="form-control">
											  
												<option value="1"  {{ (old('status') == 1  || $user->status == 1) ? 'selected' : ''}}>Active</option>
												<option value="0" {{ (old('status') === "0" || $user->status == 0) ? 'selected' : ''}}>Inactive</option>
												
											</select>
											@if ($errors->has('status'))
                                          <span class="text-danger">{{ $errors->first('status') }}</span>
                                         @endif
										</div>
										 
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">update</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6"> </div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
@stop

@section('customJS')
<script>
$(function () {

  $.validator.addMethod("alpha", function(value, element) {
    return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
  }, "Letters only please");

  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
        alpha: true
      },
      email: {
        required: true,
        email: true,
      },
       mobile: {
        required: true,
         minlength : 10,
         maxlength : 10
      },
      password: {
      
         minlength : 6
      },
    
     image : {
       
        accept:"jpg,png,jpeg"
      },
    },
    messages: {
      name: {
        required: "Please enter a name",
       // lettersonly: "only  name"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
     
      mobile :{
        required: "Please enter a mobile number", 
        minlength : 'mobile number must be 10 digit',
        maxlength : 'mobile number must be 10 digit'
      },
      password :{
         
        minlength : 'password must be 6 character',
       
      },
      image:{
         
         accept: "Only image type jpg/png/jpeg is allowed"
      } 
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@stop