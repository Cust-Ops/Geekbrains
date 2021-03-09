<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт Александра Бовина</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

	<h1>Личный сайт Александра Бовина</h1>

	<div class="center">
	<img src="img/CustOps2.1.png">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут Александр Бовин. Я начинающий программист. Свою фотографию я решил не прикладывать, все таки она является частью мои персональных данных, но картиночку закинул.</p>

			<p>На этом сайте вы можете сыграть в несколько игр которые я написал: 
			<a href="index.php">Главная</a>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.html">Угадайка</a>,
			</p>
		</div>
	</div>
</div>
<div class="footer">
Copyright &copy; <?php echo date("Y");?>  Alex Bovin
</div>


</body>
</html>
