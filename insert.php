<?php 
//session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO users (phone, name, password) VALUES ('{$_POST['phone']}', '{$_POST['name']}', '{$_POST['password']}')");
header('location: check.php');

?>