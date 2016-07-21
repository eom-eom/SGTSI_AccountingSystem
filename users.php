<?php
	require_once('support/config.php');
	addHead('General Joural');
	addNavBar();
	addSideBar();
?>

<div class="content-wrapper">
	<?php
		include_once('modals/add_user.php');
	?>
<section class="content-header">
	<h2> Users </h2>
	<div class="box">
	<div class="box-body">
	    <button type="submit" class="btn btn-primary" style="float:right;" id="btnadd" name="btnadd" onclick="addUser()"><i class="fa fa-plus"></i> Add User</button>
	</div>
	<div class="box-body">
		<table id="table_user" class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="tableheader">
			<th>ID</th>
			<th>FULL NAME</th>
			<th>USER NAME</th>
			<th>USER TYPE</th>
			<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
	</div>
	</div>	
</section>
</div>


<?php
	addFoot();
?>