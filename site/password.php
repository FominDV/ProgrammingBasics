<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор паролей</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',"0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function generate(){
			var length = readInt();
			var password = "";
			for(var i=0; i<length; i++){
				var randomNumber = Math.round(Math.random()*alphabet.length);
				password += alphabet[randomNumber];
			}

			write("Сгенерированный пароль из "+length+" символов:<br><h2>"+password+"</h2><br>Введите желаемое количество символов для пароля.");
		}

	</script>
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Генератор паролей</h1>

			<div class="box">
				<p>Данная программа генерирует пароль заданной длины из латинских букв и цифр.</p>
				<p id="info">Введите желаемое количество символов для пароля.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="generate();" id="button">Сгенерировать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y"); ?> Dmitriy Fomin
<div>


</body>
</html>