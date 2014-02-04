<?php 
include 'config.php';
include 'examDAO.php';
session_start();
$_SESSION['id'];
define('number',10);
$answer = (isset($_POST['answer'])) ? $_POST['answer']:"";
$id = (isset($_POST['id'])) ? $_POST['id']+1:1;
$answers = (isset($_POST['answers'])) ? $_POST['answers']:"";
$answer .= $answers;
if($id > number){
	$_SESSION['answer'] = $answer;
	$_SESSION['id'];
	header("Location:location.php");
}

$sql = examDAO::getquestion($id);
$id = $sql['id'];
 ?>
<html>
<script src = "jquery.1.10.2.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    	<link rel="stylesheet" type="text/css" href="css/saturno.css">

	<script>
		$(document).ready(function(){
			$("#start").on('click', function(){
				if($('#a').is(":checked")){
					return true;
				}else if($('#b').is(":checked")){
					return true;
				}else if($('#c').is(":checked")){
					return true;
				}else if($('#d').is(":checked")){
					return true;
				}else{
					 alert("pumili ka!");
					 return false;
				}
			});
		});
	</script>
	<head>
	<title></title>
</head>
<body id = "backnavi">
	<div id = "nav1" class = "well" >
    		<center>
    			<font color = "white">
    		<h1>
	<font face = "Trajan pro" color = "white">ONLINE EXAMINATION</font></h1>
    		
    		</font>
    		</center>
    	</div>

	<form action = "radioquestion.php" method = "post">
	<div id = "rnav" class = "well"><font color = "black">
		
			<center><B>QUESTIONS <?=$id?>.</B><span><?=$sql['question']?></span></center>
</div>			
				<div id = "rnav2" class = "well"><br>Choose Your Answer below:</br>
				<label><input type = "radio" value = "a" name = "answers" id = "a">   <?=$sql['choice_a']?></label>
				<label><input type = "radio" value = "b"name = "answers" id = "b">   <?=$sql['choice_b']?></label>
				<label><input type = "radio" value = "c"name = "answers" id = "c">    <?=$sql['choice_c']?></label>
				<label><input type = "radio" value = "d"name = "answers" id = "d">    <?=$sql['choice_d']?></label>
			</div>
		
	</font> 
		</TABLE><center>
	<input type = "hidden" name = "answer" value = "<?=$answer?>">
	<input type = "hidden" name = "id" value = "<?=$id?>">
		</center>
			<div id = "rnav5">
		<button id = "start">Submit</button>
			</div>
		</div>
	</form>
	<div id = "rnav4" class = "well"></div>
</body>
	
</html>