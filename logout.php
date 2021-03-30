
<?php

session_start();
 if (isset($_SESSION['uname'])) {
 	session_destroy();
  header ("location: index.php");
}else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		$_SESSION['uname']='$uname';
		header ("location: index.php");
	}else{
		header ("location: index.php");
	}
}
 ?>
