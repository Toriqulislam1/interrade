@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title" style="text-center !important">Admin Profile Edit</h4>
			 
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
					@csrf  
					<div class="row">
						<div class="col-6">						
						
                            <div class="form-group">
                                <h5>Admin  Name  <span class="text-danger">*</span></h5>
                                <div class="controls">
                            <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}"> </div>
                            </div>
							<div class="form-group">
                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                        <input type="file" name="profile_photo_path" class="form-control" required="" id="image"> </div>
                            </div>
					
						</div>

                        <div class="col-6">						
                        <div class="form-group">
                                <h5>Admin Email  <span class="text-danger">*</span></h5>
                                <div class="controls">
                            <input type="email" name="email" class="form-control" required="" value="{{ $editData->email }}"> </div>
                            </div>
							<div class="form-group">
                            <img id="showImage" src="{{ (!empty($editData->admin_photos))? url('upload/admin_images/'.$editData->admin_photos):url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">	
							</div>
					
						</div>
				
						</div>
					  </div>
					
                        </div>
					
						<div class="text-xs-right">
						<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">	
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
			 $('#showImage').attr('src',e.target.result);	
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection