<?php
	require_once('../support/config.php');
		if(isset($_POST['account_name'])&&isset($_POST['type'])&&isset($_POST['acc_id'])){
			$account_name = $_POST['account_name'];
			$account_type = $_POST['type'];
			$acc_id = $_POST['acc_id'];
			$rowcount= $connection->myQuery("SELECT * FROM accounts where account_name = $account_name AND acc_id != $acc_id ")->rowcount();
			echo $rowcount;			
		
		if($rowcount>0){
			setAlert("<strong>Uhh ohh</strong> The account name chosen is already existing",'danger');
			redirect('../edit_account.php?id='.$acc_id);
			
		}else{
			$account_name = $_POST['account_name'];
			$account_type = $_POST['type'];
			$acc_id = $_POST['acc_id'];
			$query= $connection->myQuery("UPDATE `accounts` SET `acc_id` = '$acc_id', `account_name` = '$account_name', 'type' = '$account_type' WHERE 'accounts'.'acc_id' = $acc_id");
			setAlert("<strong>Sucessfully</strong> edited a journals details",'success');
			redirect('../edit_account.php?id='.$acc_id);
		}
		
	}else{
		redirect('../index.php');
	}
?>