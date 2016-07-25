<?php
	require_once('../support/config.php');
	if(loggedId()&&isset($_POST['username'] ){
		$username=$_POST['username'];
		$fullname=$_POST['fullname'];
		$password=$_POST['passsword'];
		$account=$_POST['account'];
		
		
	}else{
		
	}
?>