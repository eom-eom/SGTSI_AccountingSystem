<?php
	require_once('../support/config.php');
	if(isset($_POST['date']) && isset($_POST['desc'])){
		
		$journaldate=$_POST['date'];
		$journaldesc=$_POST['desc'];
		$query = $connection->myQuery("CALL add_journal('$journaldate','$journaldesc','0'"); //insert stored procedure here
	}else{
		redirect('../index.php');
	}
	
?>