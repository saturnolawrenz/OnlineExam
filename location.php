
<?php 
include 'config.php';
include 'examDAO.php';
session_start();
$answer = $_SESSION['answer'];
$id = $_SESSION['id'];
$result = examDAO::computeScore($answer);
$ans = $result * 10;
 ?>
 <html>
<head>
	<title></title>
</head>
<body id = "backback">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/saturno.css">
		<center><div id ="ansss" class = "well">Your Score is<h1><?=$ans?></h1></center>
		</div>
		<div id = "rnav6">
		<form action = 'registration.php' method = "POST">
		
<button>log out</button>
</div>
		</form>
	</body>
</html>