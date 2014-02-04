<?php 
require 'config.php';
include 'examDAO.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql = examDAO::validating($email,$password);
print_r($sql);
session_start();
$_SESSION['id'] = $sql['id'];
if($sql){
	header("location:radioquestion.php");
}else{
	echo "error";
}
	

 ?>