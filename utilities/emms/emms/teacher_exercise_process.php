<?php  
include 'include/connect.php';
session_start();
if (isset($_SESSION['id'])) {
	if ($_POST['num']) {
		$teacher = $_SESSION['fname'].' '.$_SESSION['lname'];
		$class = $_POST['class'];
		$subject = $_POST['subject'];
		$exerciseId = rand();
		$num = $_POST['num'];

		$exercise = mysqli_query($con, "INSERT INTO exercises(exerciseId, questions, teacher, class, subject) VALUES('{$exerciseId}', '{$num}', '{$teacher}', '{$class}', '{$subject}')");
		if ($exercise) {
			$createQuest = fopen("questions/".$exerciseId.".js", "w");
			$header = fwrite($createQuest, "let questions = [");
			for ($i=1; $i <= $num; $i++) {
				$question = mysqli_real_escape_string($con, $_POST[$i.'ques']);
				$answer = mysqli_real_escape_string($con, $_POST[$i.'opt']);
				$ans1 = mysqli_real_escape_string($con, $_POST[$i.'ans1']);
				$ans2 = mysqli_real_escape_string($con, $_POST[$i.'ans2']);
				$ans3 = mysqli_real_escape_string($con, $_POST[$i.'ans3']);
				$ans4 = mysqli_real_escape_string($con, $_POST[$i.'ans4']);
				
				if ($answer == 1) {
				$cont = "
	{
		numb: $i,
		question: '$question',
		answer: '$ans1',
		options: [
			'$ans1',
			'$ans2',
			'$ans3',
			'$ans4'
		]
  },
				";
			}elseif ($answer == 2) {
				$cont = "
	{
		numb: $i,
		question: '$question',
		answer: '$ans2',
		options: [
			'$ans1',
			'$ans2',
			'$ans3',
			'$ans4'
		]
  },
				";
			}elseif ($answer == 3) {
				$cont = "
	{
		numb: $i,
		question: '$question',
		answer: '$ans3',
		options: [
			'$ans1',
			'$ans2',
			'$ans3',
			'$ans4'
		]
  },
				";
			}elseif ($answer == 4) {
				$cont = "
	{
		numb: $i,
		question: '$question',
		answer: '$ans4',
		options: [
			'$ans1',
			'$ans2',
			'$ans3',
			'$ans4'
		]
  },
				";
			}

				$quest = fwrite($createQuest, $cont);
				if ($createQuest) {
					header("location: teacher_exercise_select.php?succ");
				}else{
					header("location: teacher_exercise_select.php?err");
				}
			}
			$footer = fwrite($createQuest, "]");
			fclose($createQuest);
		}else{
			header("location: teacher_exercise_select.php?err");
		}
	}
}else{
	header("location: login.php");
}
?>