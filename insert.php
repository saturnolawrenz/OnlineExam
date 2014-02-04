<?php 
include  'config.php';
include 'examDAO.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = examDAO:: insertData($fname,$lname,$email,$password);
	if($sql){
		header("location:registration.php");
	}else{
		echo "<script>alert('Already Exist!!');window.location.href='registration.php'</script>";
	}
 ?>

