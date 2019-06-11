<?php include_once('public_header.php');?>
<?php echo form_open('user/dashboard',['class'=>'container']);?>
<div class="container">
<br>
<div class="row">
	<div class="col-lg-12 col-lg-offset-3">
	<?= anchor('user/updation','Update information',['class'=>'btn btn-lg btn-primary float-sm-right']) ?>
	<br>
	<br>
	<br>
	<?= anchor('user/logout','logout',['class'=>'btn btn-lg btn-primary float-sm-right']) ?>
	<?= anchor('user/deletion','withdraw enroll',['class'=>'btn btn-lg btn-primary float-sm-left']) ?>
	</div>
	</div>
	</br>
<table class="table">
<thead>
<th>Name</th>
<th>Email</th>
<th>Phone no</th>
<th>Password</th>
<th>Course</th>
</thead>
<tbody> 
<td><?= $user->name ?></td>
<td><?= $user->email ?></td>
<td><?= $user->phoneno ?></td>
<td><?= $user->password ?></td>
<td><?= $user->course ?></td>
</tr>
</tbody>
</table>
</div>
<?php include_once('public_footer.php');?>
