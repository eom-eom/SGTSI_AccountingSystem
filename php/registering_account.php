<?php
	require_once('../support/config.php');
	if(isset($_POST['acctno']) && isset($_POST['acctname']) && isset($_POST['accttype'])){
		
		$acct_no=$_POST['acctno'];
		$acct_name=$_POST['acctname'];
		$acct_type=$_POST['accttype'];
		$query = $connection->myQuery("INSERT INTO `accounts` (`acc_id`, `account_name`, `type`, `is_deleted`) VALUES ( '$acct_no', '$acct_name', '$acct_type', '0')");
		setAlert("<strong>Registered</strong> a new account",'success');
		redirect('../chart_of_accounts.php');
	}else{
		redirect('../index.php');
	}
	
?>