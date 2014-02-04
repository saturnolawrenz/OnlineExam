 <?php 
include 'config.php';
$score;
$id = (isset($_GET['id']))?$_GET['id']-1:false;
$answer =(isset($_GET['answer']))?$_GET['answer']:false;
$sql = "SELECT * FROM questions WHERE id = '$id' and answer = '$answer'";
$result = mysql_num_rows($sql);
if($result >0){
	$score = 1;
	return $score;
}else{
	$score = 0;
	return $score;
}

echo json_encode( 
	array(
		'answerA'=> $score
		)
	);
 ?>