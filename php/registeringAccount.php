<?php
	require_once('../support/config.php');
	if(isset($_POST['acct_no']) && isset($_POST['acct_name']) && isset($_POST['acct_type'])){
		
		$acct_no=$_POST['acc_id'];
		$acct_name=$_POST['account_name'];
		$acct_type=$_POST['name'];
		$query = $connection->myQuery("INSERT INTO `accounts` (`acc_id`, `account_name`, ``, `ledger_id`) VALUES (NULL, '$newdate', '$journaldesc', '0')");
		redirect('../chart_of_accounts.php');
	}else{
		redirect('../index.php');
	}
	
?>