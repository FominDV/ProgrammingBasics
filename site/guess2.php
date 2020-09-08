<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Игра угадайка на двоих</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random()*100);
		var player = 1;
		var mess="";

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess2(){
			document.getElementById("button").innerHTML = "Проверить";
			write(mess+"\nХодит игрок №"+player);
			var user = readInt();
			if(user==answer){
				write("Вы угадали! Поздравляем!<br>Победил "+player+" игрок!<br>Верный ответ: "+answer);
				hide("button");
				hide("userAnswer");
			} else {
				if(user<answer){
					mess ="число слишком маленькое.";
				} else{
					mess = "число слишком большое. ";
				}
				if(player==1)
					player=2;
				else
					player=1;
				write(mess+"<br>Ходит игрок №"+player);
			}
	
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

			<h1>Игра угадайка на двоих</h1>
			<div class="box">
				<p id="info">Угадайте число от 0 до 100<br>Ходит игрок №1</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess2();" id="button">Начать</a>				
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