
<?php
$uname="demo";
$pwd="demo";

session_start();
 if (isset($_SESSION['uname'])) {
 	header ("location: welcome.php");

}else{
	if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
		$_SESSION['uname']='$uname';
		header ("location: welcome.php");
	}else{
		echo "incorrect";
	}
}
 ?>
