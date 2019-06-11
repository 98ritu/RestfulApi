<?php include('public_header.php');?>
<br>
<?= anchor('user/registration','Enroll',['class'=>'btn btn-lg btn btn-success float-sm-left']) ?>
<?= anchor('login/admin_login','Already Enrolled,<br>Log in!',['class'=>'btn btn-lg btn btn-success float-right']) ?>
<marquee behavior="scroll" direction="left">Last date for enrollment is 25/04/2019,ENROLL TODAY!</marquee>
<h1>Users Enrolled</h1>
<hr>
<table class="table">
<thead>
<th>SR No.</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
</thead>
<tbody>
<tr>
<?php if(count($users)): ?>
<?php $count=$this->uri->segment(3,0); ?>
<?php foreach($users as $user): ?>
<td><?= ++$count ?></td>
<td><?= $user->name ?></td>
<td><?= $user->email ?></td>
<td><?= $user->course ?></td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr>
<td colspan="3">No Records Found</td>
</tr>
<?php endif;?>
</tbody>
</table>
<?= $this->pagination->create_links(); ?>
</div>


<div class="container">
<br>
<br>
<br>
<br>
<br>
<div class="row">
	
	</div>
	</div>

<?php include('public_footer.php');?>