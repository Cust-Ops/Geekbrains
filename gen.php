<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Александра Бовина</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		function readInt() {
			var number = document.getElementById("userAnswer").value;
			return (number);
		}
		function write(text){
			document.getElementById("info").innerHTML = text;
		}
		function getRandomNumber(max){
			return Math.round(Math.random() * max);
		}

		function generateText(){
			
			var length = readInt();
			var letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
			var numb = ['1','2','3','4','5','6','7','8','9','0'];
			var text = "";
			for(var i = 0; i < length - 1; i++){
				var m = getRandomNumber(letters.length);
				text += letters[m];
				var n = getRandomNumber(numb.length);
				text += numb[n];
			}
		
			write("Ваш пароль: " + text);
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
			<h1>Личный сайт Александра Бовина</h1>

			<div class="box">

				<p id="info">Введите длинну желаемого пароля.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="generateText();" id="button">Сгенерировать</a>
				
			</div>
		</div>
	</div>
</div>
<div class="footer">
Copyright &copy; <?php echo date("Y");?>  Alex Bovin
</div>


</body>
</html>
