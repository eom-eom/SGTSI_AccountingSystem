<?php
	session_start();
	define("APPNAME","Accounting System")
	
	function addHead($pageTitle=APPNAME,$DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'template/head.php';
	}
	
	function addFoot($DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'template/footer.php';
	}
	
	
?>