<?php include('public_header.php');?>
<?php echo form_open('api/user_post',['class'=>'container']);?>
<form>
  <fieldset>
    <legend>Enrollment form</legend>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">User Name</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'name','class'=>'form-control','id'=>'name','placeholder'=>'username','value'=>set_value('name')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('name',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'email','class'=>'form-control','id'=>'email','placeholder'=>'email','value'=>set_value('email')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('email',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Phone no.</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'phoneno','class'=>'form-control','id'=>'phoneno','placeholder'=>'Phone no','value'=>set_value('phoneno')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('phoneno',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'password','class'=>'form-control','id'=>'password','placeholder'=>'password','value'=>set_value('password')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('password',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Course</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'course','class'=>'form-control','id'=>'course','placeholder'=>'course','value'=>set_value('course')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('course',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	
	<div class="form-group">
	<div class="col-lg-10 col-lg-offset-2">
    <button type="button" class="btn btn-success" onclick="submitForm()">Submit</button>
	<button type="reset" class="btn btn-danger">Cancel</button>
	</div>
	</div>
  </fieldset>
</form>
</div>
<script>
function submitForm(){
	console.log($('#name').val());
var data = new FormData();
data.append('name',$('#name').val());
data.append('phoneno',$('#phoneno').val());
data.append('password',$('#password').val());

data.append('email',$('#email').val());

data.append('course',$('#course').val());
        $.ajax({
            url: "http://localhost/restapi/api/user",
            type: "POST",
			data:data,
			processData: false,
  contentType: false,
            headers: { "x-api-key": "12345" },
			success:function(msg){
					console.log(msg);
					alert(msg);
			},
			error:function(msg){
				alert(msg);
				console.log(msg);
			}
        });
}
</script>
<?php include('public_footer.php');?>
