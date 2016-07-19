<?php
	require_once('../support/config.php');
	if(isset($_POST['username'])&&isset($_POST['password'])){
	
		$userName=$_POST['username'];
		$password=encryptIt($_POST['password']);
		
		$query = $connection -> myQuery("SELECT * FROM users where username='$userName' AND password='$password'")->fetch(PDO::FETCH_ASSOC);
		
		
		if($query['is_deleted']==0){
			if($query['is_logged_in']==0){
				if(decryptIt($query['password'])==decryptIt($password)){
					//echo 'log in good';
					
					redirect('../dash.php');
				}else{
					echo 'Wrong Username /Password';
				}
			}else{
				echo 'is deleted in';
			}
		}
		
	}else{
		redirect('../index.php');
	}
	
	
?>