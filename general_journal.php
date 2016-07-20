<?php
	require_once('support/config.php');
	addHead('General Joural');
	addNavBar();
	addSideBar();
?>

<div class="content-wrapper">
<section class="content-header">
	<h2> General Journal </h2>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
				<button type="submit" class="btn btn-primary" id="btn-add" name="btnadd"><i class="fa fa-plus"> Add General Journal</i></button>
		</div>
	<div class="box-body">
		<table id="table" class="table responsive-table table-bordered table-striped">
			<thead>
				<tr class="tableheader">
					<th>ID</th>
					<th>NAME</th>
					<th>DESCRIPTION</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<!-- <tr class="tableheader"> -->
					<td> 1 </td>
					<td> Lorem Ipsum </td>
					<td> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </td>
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
