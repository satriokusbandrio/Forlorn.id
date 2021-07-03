<?php 
include("connect.php");
$result = mysqli_query($mysqli, "select * from users where username='".$_POST['username']."' and password='".$_POST['password']."'"); 
if ($row = $result->fetch_assoc()) { 
	echo "<script>window.location.href='dashboard.php';</script>";
}else{
	echo "<script>window.location.href='login.php';</script>";
}
?>