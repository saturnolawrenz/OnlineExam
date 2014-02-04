<?php 	

include 'config.php';
class examDAO{
	public static function getAnswers()
	{
		try{
			global $db;
			$ansque = "SELECT answer from questions order by id";
			$result = $db->query($ansque);
			$array = array();
			while ($row = $result->fetch_assoc()) {
				$array[] = $row['answer'];
			}
			return $array;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
		return false;
	}
	public static function computeScore($answer)
	{
		try{
			$correct = self::getAnswers();
			if($correct === false){
				error_log("answer are not ready");
				return false;
			}if(count($correct) != strlen($answer)){
				error_log("wew");
				return false;
			}
			$val = 0;
			for ($a = 0; $a < 10 ; $a++) { 
				if($correct[$a] == $answer[$a]){
					$val++;
				}
			}
			return $val;
		}catch(Exception $e){
			error_log($e->getMessage());
		}
	}
	public static function insertData($fname,$lname,$email,$password)
	{
		try {
			global $db;
			$sql2nd = "select * from form where email = '$email'";
			$result2nd = $db->query($sql2nd);
			if($result2nd->num_rows>0){
				echo 'the email '. $email. 'already exist';
			}else{
			$sql = "insert into form(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
			$result = $db->query($sql);
			return $result;
			}
		} catch (Exception $e) {
			error_log($e->getMessage);
		}
		return false;

	}
	public static function validating($email,$password)
	{
		try{
			global $db;
			$validates = "select * from form where email = '$email' and password = '$password'";
			$result3rd = $db->query($validates);
			if ($result3rd) {
				if($result3rd->num_rows>0){
					return $result3rd->fetch_assoc();
				}else{
					return false;
				}
			}else{
				return false;
			}
		} catch (Exception $e) {
			error_log($e->message);
		}
		return false;
	}
	public static function getquestion($id)
	{
		try {
			global $db;
			$quesTion = "select * from questions WHERE id = '$id'";
			$result4th = $db->query($quesTion);
			if($result4th){
				if($result4th->num_rows>0){
					return $result4th->fetch_assoc();
				}else{
					return false;
				}
			}else{
				return false;
			}
		} catch (Exception $e) {
			error_log($e->message);
		}
	return false;
	}
}

 ?>