<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('General Journal');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}s
?>

<div class="content-wrapper">
	<?php
		include_once('modals/create_journal.php');
	?>
<section class="content-header">
	<h2> General Journal </h2>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
				<button type="submit" class="btn btn-primary" id="btn-add" onclick='createJournal();' name="btnadd" style="float:right;"><i class="fa fa-plus"> Add General Journal</i></button>
		</div>
	<div class="box-body">
		<table id="table" class="table responsive-table table-bordered table-striped">
			<thead>
				<tr class="tableheader">
					<th>ID</th>
					<th>DATE OF JOURNAL</th>
					<th>DESCRIPTION</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr class="tableheader"> -->
<?php
			$journaltable =$connection -> myQuery("SELECT * FROM journals;");
			
				while($result = $journaltable->fetch(PDO::FETCH_ASSOC)){
					$id= $result['journal_id'];
					$journal_date = $result['journal_date'];
					$description = $result['description'];
?>
					<tr>
						<td><?php echo "$id ";?></td>
						<td><?php echo "$journal_date ";?></td>
						<td><?php echo "$description ";?></td>
						<td> 
							<button type="submit" class="btn btn-primary " id="btn-view" onclick="redirect(<?php echo "$id";?>);" name="btnview"><i class="fa fa-eye"> </i></button> 
							<button type="submit" class="btn btn-primary " id="btn-edit" name="btnedit"><i class="fa fa-edit"> </i></button>
							<button type="submit" class="btn btn-primary " id="btn-archive" name="btnarchive"><i class="fa fa-file-archive-o"> </i></button>
						</td>
								</tr><?php }; ?>

					
			</tbody>
		</table>
	</div>
	</div>
	</div>
</section>

 
</div>

<script type="text/javascript">

	function redirect(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/journal_entry.php?id=" + id;
		window.location=string;
	}
</script>





<?php
	addFoot();
?>
