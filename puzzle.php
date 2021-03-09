<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Александра Бовина</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	include "menu.php";
?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
						$userAnswer = $_Get["userAnswer1"];
						$score = 0;
						if($userAnswer == "сухой" || $userAnswer == "сухих"){
							$score++;
						}

						$userAnswer = $_Get["userAnswer2"];
						if($userAnswer == "разговор" || $userAnswer == "разговоры"){
							$score++;
						}

						$userAnswer = $_Get["userAnswer2"];
						if($userAnswer == "льдина" || $userAnswer == "айсберг"){
							$score++;
						}
						echo "Вы угадали " . $score . " загадок";
					}
					
				?>

				<form method="get">
					<p>Каких камней не бывает в речке?</p>
					<input type="text" name="userAnswer1">

					<p>Завязать можно, а развязать нельзя. Что это такое?</p>
					<input type="text" name="userAnswer2">

					<p>Я - вода, и по воде плаваю. Кто я такая?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

		</div>
	</div>
</div>


<div class="footer">
Copyright &copy; Alex Bovin
</div>
</body>
</html>