<?php
session_start();
?>
<?php
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE phone='{$_POST['phone']}' AND password ='{$_POST['password']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['compid'];
		header('location: dist.php');
	}
	else{
		header('location: go.php');
	}
?>