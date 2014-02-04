$(document).ready(function(){
	$('#submit').on('click', function(){
		if($('#a').is(":checked")){
			return true;
		}
		else if($('#b').is(":checked")){
			return true;
		}
		else if($('#c').is(":checked")){
			return true;

		}else if($('#d').is(":checked")){
			return true;
		}
		else{
			alert("enter your answer!");
			return false;
		}
	// 	if(adding != 10){
	// 		adding++;
	// 		$("#back").fadeIn(3000);
	// 		$.ajax({
	// 			url: 'search.php',
	// 			data: {id:adding,answer1:answer},
	// 			dataType: 'JSON',
	// 			method: 'GET',
	// 			success:function(responce){
	// 				$('#question').html("<span id ='read'>"+responce.question+"</span>");
	// 				$('#A').html("<input type = 'radio' value = 'a' id = 'a'name = 'answer'>"+responce.choiceA);
	// 				$('#B').html("<input type = 'radio' value = 'b' id = 'b'name = 'answer'>"+responce.choiceB);
	// 				$('#C').html("<input type = 'radio' value = 'c' id = 'c'name = 'answer'>"+responce.choiceC);
	// 				$('#D').html("<input type = 'radio' value = 'd' id = 'd'name = 'answer'>"+responce.choiceD);
	// 				correct += 1;
	// 					alert(correct);
	// 			}
	// 		});
			

	// 	}else{
	// 		alert("tapos na");
	// 	}
		
	// });
	// $('#start').click(function(){
	// 	if(adding = 1){
	// 		$("#back").fadeIn(3000);
	// 		$('#start').fadeOut(1000);
	// 		$.ajax({
	// 			url: 'search.php',
	// 			data: {id:adding},
	// 			dataType: 'JSON',
	// 			method: 'GET',
	// 			success:function(responce){
	// 				$('#question').html("<span id ='read'>"+responce.question+"</span>");
	// 				$('#A').html("<input type = 'radio' value = 'a' id = 'a'name = 'answer'>"+responce.choiceA);
	// 				$('#B').html("<input type = 'radio' value = 'b' id = 'b'name = 'answer'>"+responce.choiceB);
	// 				$('#C').html("<input type = 'radio' value = 'c' id = 'c'name = 'answer'>"+responce.choiceC);
	// 				$('#D').html("<input type = 'radio' value = 'd' id = 'd'name = 'answer'>"+responce.choiceD);
	// 			}
	// 		});
	// 	}
	});
});