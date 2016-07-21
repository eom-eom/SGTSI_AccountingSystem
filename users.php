<?php
	require_once('support/config.php');
	addHead('Users');
	addNavBar();
	addSideBar();

	$data=$connection->myQuery("SELECT
 							user_id,
 							full_name,
 							username,
 							user_type
                        FROM users
                        ");
 ?>

<div class="content-wrapper">
	<?php
		include_once('modals/add_user.php');
	?>
<section class="content-header">
	<h2> Users </h2>
	<div class="box">
	<div class="box-body">
	    <button type="submit" class="btn btn-primary" style="float:right;" id="btnadd" name="btnadd" onclick="addUser()"><i class="fa fa-plus"></i> User</button>
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
            <?php
                while($row = $data->fetch(PDO::FETCH_ASSOC)):
            ?>
            <tr>
	            <td><?php echo htmlspecialchars($row['user_id'])?></td>
	            <td><?php echo htmlspecialchars($row['full_name'])?></td>
	            <td><?php echo htmlspecialchars($row['username'])?></td>
	            <td><?php echo htmlspecialchars($row['user_type'])?></td>
	            <td class='text-center'>
	            <a href='user_update.php?id=<?php echo $row['user_id']; ?>' class='btn btn-success btn-sm'><span class='fa fa-pencil'></span></a>
	            <a href='user_delete.php?id=<?php echo $row['user_id']; ?>&t=prod' onclick="return confirm('This record will be deleted.')" class='btn btn-danger btn-sm'><span class='fa fa-trash'></span></a>
	            </td>
            </tr>
            <?php
                endwhile;
            ?>
	</div>
	</div>	
</section>
</div>


<?php
	addFoot();
?>