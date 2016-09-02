<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('Chart Of Accounts');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
?>

<div class="content-wrapper">
	<?php
		include_once('modals/register_account.php');
	?>
<section class="content-header">
	<h2> Chart Of Accounts </h2>
	<?php
		Alert();
		unsetAlert();
	?>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
				<button type="submit" class="btn btn-primary" id="btn-add" onclick='addAccount();' name="btnadd" style="float:right;"><i class="fa fa-plus"> &nbsp; Register an Account</i></button>
		</div>
	<div class="box-body">
		<table id="table" class="table responsive-table table-bordered table-striped">
			<thead>
				<tr class="tableheader">
					<th>Account No</th>
					<th>Name of Account</th>
					<th>Type of Account</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr class="tableheader"> -->
<?php
			$accounttable =$connection -> myQuery("SELECT * FROM `accounts` INNER JOIN account_types on accounts.type = account_types.acc_types_id;");
			
				while($result = $accounttable->fetch(PDO::FETCH_ASSOC)){
					if($result['is_deleted']==0){
					$id= $result['acc_id'];
					$account_name = $result['account_name'];
					$name = $result['name'];
?>
					<tr>
						<td><?php echo "$id";?></td>
						<td><?php echo "$account_name ";?></td>
						<td><?php echo "$name ";?></td>
						<td> 
							
							<button type="submit" class="btn bg-maroon" id="btn-edit" name="btnedit" onclick="edit(<?php echo "$id";?>)"><i class="fa fa-edit"> </i></button>
							<button type="submit" class="btn btn-warning" id="btn-archive" name="btnarchive" onclick="archive(<?php echo "$id";?>);"><i class="fa fa-file-archive-o"> </i></button>
						</td>
				</tr><?php }
				}; ?>

					
			</tbody>
		</table>
	</div>
	</div>
	</div>
</section>

 
</div>

<script type="text/javascript">


	
	function archive(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/php/archive_account.php?id=" + id;
		window.location=string;
	}
	
	function edit(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/edit_account.php?id=" + id;
		window.location=string;
	}
	
</script>





<?php
	addFoot();
?>
