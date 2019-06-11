
<?php include('public_header.php');?>
<?php echo form_open('login/admin_login',['class'=>'container']);?>
<form action="<?=base_url()?>/login/admin_login" method="post" enctype="multipart/form-data">
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">User Name</label>
	  <div class="col-lg-10">
	  <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'username','value'=>set_value('username')])?>
    </div>
	 </div>
	  </div>
    <div class="col-lg-6">
	<?php echo form_error('username',"<p class='text-danger'>","</p>"); ?>
	</div>
	</div>
	<div class="row">
	<div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
	  <div class="col-lg-10">
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	</div>
	</div>
	</div>
	<div class="col-lg-6">
	<?php echo form_error('password',"<p class='text-danger'>","</p>");?>
	</div>
	</div>
	<div class="form-group">
	<div class="col-lg-10 col-lg-offset-2">
    <button type="submit" class="btn btn-success">Submit</button>
	<button type="reset" class="btn btn-danger">Cancel</button>
	</div>
	</div>
  </fieldset>
</form>
</div>

<?php include('public_footer.php');?>
