<?php
	require_once('../support/config.php');

		if(isset($_POST['id'])&&isset($_POST['id'])&&isset($_POST['accname'])&&isset($_POST['acctype'])){ 
			
			$account_id = $_POST['id'];
			$account_no = $_POST['accno'];
			$account_name = $_POST['accname'];
			$account_type = $_POST['acctype'];

			$rowcount= $connection->myQuery("SELECT * FROM accounts where account_name = '$account_name' AND acc_id != $account_no")->rowcount();
			echo $rowcount;
			
		if($rowcount>0){
			setAlert("<strong>Uhh ohh!</strong> The date and year chosen has a journal already",'danger');
			redirect('../edit_account.php?id='.$account_id);
			
		}else{
			$account_id = $_POST['id'];
			$account_no = $_POST['accno'];
			$account_name = $_POST['accname'];
			$account_type = $_POST['acctype'];
			$query= $connection->myQuery("UPDATE `accounts` SET `acc_id` = '$account_no', `account_name` = '$account_name', `type` = '$account_type' WHERE `accounts`.`acc_id` = '$account_id'");
			setAlert("<strong>Sucessfully</strong> edited an Account details",'success');
			redirect('../edit_account.php?id='.$account_id);
		}
		
	}else{
		redirect('../index.php');
	}
?>