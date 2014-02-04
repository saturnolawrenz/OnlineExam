<?php 
include 'config.php';
$id = $_GET['id'];
$sql = mysql_query("select * from questions where id = '$id'");
$result = mysql_fetch_assoc($sql);
echo json_encode(
	array(
		'question'=>$result['question'],
		'choiceA'=>$result['choice_a'],
		'choiceB'=>$result['choice_b'],
		'choiceC'=>$result['choice_c'],
		'choiceD'=>$result['choice_d']
		)
	);

 ?>