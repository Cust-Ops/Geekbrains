<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Александра Бовина</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = "q";
		function readInt() {
			var number = document.getElementById("userAnswer").value;
			return (number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id) {
			document.getElementById(id).style.display = "none";
		}
		function guess(){
			tryCount++;
			var userAnswer = readInt();
			var playerNumber = 1;
			if(tryCount == maxTryCount){
				write("Вы закончили игру. <br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			}
			if(userAnswer == answer){
				write("<b>Поздравляю, победил играок " + playerNumber + "</b>");
				hide("button");
				hide("userAnswer");
			}else if(userAnswer > answer){
				write("Вы ввели слишком большое число.<br>Попробуйте еще раз. Ход игрока " + playerNumber + " Введите число от 1 до 100. Чтобы законичить игру введите q.")
			}else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число.<br>Попробуйте еще раз. Ход игрока " + playerNumber + " Введите число от 1 до 100. Чтобы законичить игру введите q.")
			}
			if(playerNumber == 1){
				playerNumber = 2;
			}else{
				playerNumber = 1;
			}

		}
	</script>
</head>
<body>

<?php
	include "menu.php";
?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100. Начинает первый игрок. Чтобы законичить игру введите q.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>
				
			</div>

		</div>
	</div>
</div>


<div class="footer">
Copyright &copy; Alex Bovin
</div>
</body>
</html>