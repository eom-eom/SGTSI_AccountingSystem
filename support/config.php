<?php
	session_start();
	define("APPNAME","Accounting System");
	
	function addHead($pageTitle=APPNAME,$DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'templates/head.php';
	}
	
	function addFoot($DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'templates/footer.php';
	}
	
	function addSideBar($DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'templates/sidebar.php';
	}
	function addNavBar($DirectoryLevel=0){
		require_once str_repeat('../',$DirectoryLevel).'templates/navbar.php';
	}
	
	function redirect($url)
	{
		header("location:".$url);
	}
	
	
	
?>