<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('General Journal');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
?>

<div class="content-wrapper">
	<?php
		include_once('modals/create_journal.php');
	?>
<section class="content-header">
	<h2> List of General Journals </h2>
	<?php
		Alert();
		unsetAlert();
	?>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
							
				<button type="submit" class="btn btn-primary" id="btn-add" onclick='createJournal();' name="btnadd" style="float:right;"><i class="fa fa-plus"> &nbsp; Add General Journal</i>
				</button>
				
		
		</div>
	<div class="box-body">
		<table id="table" class="table responsive-table table-bordered table-striped">
			<thead>
				<tr class="tableheader">
					<th>ID</th>
					<th>DATE OF JOURNAL</th>
					<th>MONTH YEAR</th>
					<th>DESCRIPTION</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr class="tableheader"> -->
<?php
			$journaltable =$connection -> myQuery("SELECT * FROM journals;");
			
				while($result = $journaltable->fetch(PDO::FETCH_ASSOC)){
					if($result['is_archived']==0){
					$id= $result['journal_id'];
					$journal_date = $result['journal_date'];
					$description = $result['description'];
?>
					<tr>
						<td><?php echo "$id ";?></td>
						<td><?php echo "$journal_date ";?></td>
						<td><?php echo date("F  Y",strtotime($journal_date));?>
						<td><?php echo "$description ";?></td>
						<td> 
							<button type="submit" class="btn btn-success" id="btn-view" data-toggle="tooltip" data-placement="top" title="Open Journal" onclick="redirect(<?php echo "$id";?>);" name="btnview"><i class="fa fa-eye"> </i></button> 
							<button type="submit" class="btn bg-maroon " id="btn-edit" name="btnedit" data-toggle="tooltip" data-placement="top" title="Edit Journal Info"  onclick="edit(<?php echo "$id";?>)"><i class="fa fa-edit"> </i></button>
							<button type="submit" class="btn btn-warning" id="btn-archive" name="btnarchive" data-toggle="tooltip" data-placement="top" title="Archive this journal"  onclick="archive(<?php echo "$id";?>);"><i class="fa fa-file-archive-o"> </i></button>
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

	function redirect(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/journal_entry.php?id=" + id;
		window.location=string;
	};
	
	function archive(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/php/archive.php?id=" + id;
		window.location=string;
	}
	
	function edit(id){
	
		//window.location ="/journal_entry.php?id=" + id;
		var href = window.location.href;
		var string = href.substr(0,href.lastIndexOf('/'))+"/edit_journal_form.php?id=" + id;
		window.location=string;
	}
	
</script>





<?php
	addFoot();
?>
