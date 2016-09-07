<?php
	require_once('../support/config.php');

		if(isset($_POST['id'])&&isset($_POST['accname'])&&isset($_POST['acctype'])){ 


			$account_name = $_POST['accname'];
			$account_type = $_POST['acctype'];
			$account_no = $_POST['id'];
			$query= $connection->myQuery("UPDATE `accounts` SET `acc_id` = '$account_no', `account_name` = '$account_name', `type` = '$account_type' WHERE `accounts`.`acc_id` = '$account_no'");
			setAlert("<strong>Sucessfully</strong> edited an Account details",'success');
			redirect('../edit_account.php?id='.$account_no);

	}else{
		redirect('../index.php');
	}
?>