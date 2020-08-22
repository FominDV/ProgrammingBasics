<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

	<h1>Личный сайт студента</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">
			<p>Здравствуйте! Я, Фомин Дмитрий Владимирович, студет Московского Политехнического университета и ученик факультета "Java разработчик" от <a href="https://geekbrains.ru">GeekBrains</a>.</p>

			<p>В настоящий момент я не работаю разработчиком, но намерен наконец сменить специяальность по причине того, что я всегда хотел развиваться в области IT. Только сейчас я могу позволить себе уделять много времени на обучение и стажироваться за небольшое вознагрождение. Этот сайт и его содержимое отражает результаты моего самого первого знакомства с javascript, html и css. Так же в структуре сайта незанчительно задействован язык php.</p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал и убедится в моих базовых знаниях основ javascript: <br>
		<a href="puzzle.php">Загадки</a>
		<a href="guess.php">Угадайка соло</a>
		<a href="guess2.php">Угадайка на двоих</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y"); ?> Dmitriy Fomin 
<div>


</body>
</html>