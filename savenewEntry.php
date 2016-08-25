<?php
require_once('../support/config.php');
if(isset($_POST['entry_description']) && isset($_POST['drnames'])){
		
	$journal_num = $_POST['JournalNumber'];
	$journalentry_id = $_POST['JournalID'];
	$entry_date = $_POST['entry_date'];
	$newDate = date("Y-m-d", strtotime($entry_date));
	$drnames=$_POST['drnames'];
	$drvalues=$_POST['drvalues'];
	$crnames=$_POST['crnames'];
	$crvalues=$_POST['crvalues'];
	$entry_desc=$_POST['entry_description'];
	
	echo $journal_num." ";
	echo  $journalentry_id." ";
	echo  $newDate." ";
	foreach($drnames as $dr_name){
		echo $dr_name." ";
	}
	foreach($drvalues as $dr_value){
		echo $dr_value." ";
	}
	foreach($crnames as $cr_name){
		echo $cr_name." ";
	}
	foreach($crvalues as $cr_value){
		echo $cr_value." ";
	}
	echo $entry_desc;
	
	
	}else{
		redirect('../index.php');
	}

	

	
?>