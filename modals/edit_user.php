<?php
	require_once('../support/config.php');
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['name'])&&isset($_POST['account'])){
		$username=$_POST['username'];
		$rowcount = mysql_num_rows(myQuery("SELECT * FROM users where username = $username"));
		echo $rowcount;
	
		
	}else{
		redirect('../index.php');
	}
	
	
?>