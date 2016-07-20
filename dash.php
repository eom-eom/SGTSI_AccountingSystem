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

<div class="content-wrapper">
<!-- add content here-->



</div>
	






<?php
	addFoot();
?>
