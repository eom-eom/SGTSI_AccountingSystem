<?php
	require_once('support/config.php');
	if(loggedId()){
		addHead('Trial Balance');
		addNavBar();
		addSideBar();
	}else{
		redirect('index.php');
		setAlert('Please log in to continue','danger');
	}
	
	include 'simple_html_dom.php';

	$html = file_get_html('create_entry.php');

	$cells = $html->find('td');
		foreach($cells as $cell) {
			echo $cell->plaintext;
		}

?>









<?php
	addFoot();
?>