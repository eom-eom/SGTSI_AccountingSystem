<?php
	session_start();
	define("APPNAME","Accounting System");
	
	//UI//
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
	//END UI//
	
	//Navigation//
	function redirect($url)
	{
		header("location:".$url);
	}
	//End Navigation
	
	//Password Encryption Same as other Configs//
	function encryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
	    return( $qEncoded );
	}
	function decryptIt( $q ) {
	    $cryptKey  = 'JPB0rGtIn5UB1xG03efyCp';
	    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
	    return( $qDecoded );
	}
	//End Password Encryption//
	
	//Database//
	require_once("class.myPDO.php");
	$connection = new myPDO("accounting",'root','');
	//END Data
?>