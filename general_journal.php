<?php
	require_once('support/config.php');
	addHead('General Joural');
	addNavBar();
	addSideBar();
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
					<td> 1 </td>
					<td> June 2016</td>	
					<td> Journal for the month of June</td>
					<td> 
						<button type="submit" class="btn btn-primary " id="btn-view" name="btnview"><i class="fa fa-eye"> </i></button> 
						<button type="submit" class="btn btn-primary " id="btn-edit" name="btnedit"><i class="fa fa-edit"> </i></button>
						<button type="submit" class="btn btn-primary " id="btn-archive" name="btnarchive"><i class="fa fa-file-archive-o"> </i></button>
					</td>
			</tbody>
		</table>
	</div>
	</div>
	</div>
</section>



  
  
</div>





<?php
	addFoot();
?>
