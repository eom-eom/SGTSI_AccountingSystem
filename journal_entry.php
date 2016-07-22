<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('Dashboard');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
	
?>
<button></button>
<div class="content-wrapper">
	<?php
		include_once('modals/create_entry.php');
	?>
	<div class="box">
		<div class="box-body">
				<input type="text" class="container-fluid" size="30" name="search" placeholder="Search">
				<button type="submit" class="btn btn-primary" id="btn-search" name="btnsearch"><i class="fa fa-search"></i> </button>
				<button type="submit" class="btn btn-primary" id="btn-add" onclick='createEntry();' name="btnadd"><i class="fa fa-plus"> Add Journal Entry</i></button>
		</div>
	<div class="box-body">


<!-- add content here-->



</div>
	






<?php
	addFoot();
?>
