<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Игра в загадки</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		var buttonFlag =-1;
		var number = 0;
		var point = 0;
		var riddles = [
			["У этого зверя огромный рост,<br>Сзади у зверя — маленький хвост,<br>Спереди у зверя — хвост большой.<br>Кто же это? Кто же это? Кто такой?<br>Ну, конечно, это он!<br>Ну, конечно, это …", "слон", "мамонт"],
			["Все его зимой боятся -<br>Больно может он кусаться.<br>Прячьте уши, щёки, нос,<br>Ведь на улице ...", "мороз","холодок"],
			["Все укутает дома<br>В белоснежный пух …", "зима", "метель"],
			["Уж таков порядок древний —<br>Я давно живу в деревне,<br>Там будильником служу,<br>Свой курятник сторожу.", "петух", "петушок", "соловей"]
		]

		function write(text){
			document.getElementById("riddle").innerHTML = text;
		}

		function read(){
			var useranswer = document.getElementById("userAnswer").value;
			return useranswer;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function ask(riddle){
		var point = 0;
		var answer = read();
		answer=answer.toLowerCase();
		for(var i=1; i<riddle.length; i++){
			if (answer==riddle[i]) {
				write("Это верный ответ!");
				point++;
			} 
		}	
		document.getElementById("button").innerHTML = "Дальше!";
		if(point!=0){
			return point;
		}else{
			write("Неверно!");
			return point;
		}
	}
		
		function checkAnswers() {
			if((riddles.length)==number){
					write("Игра окончена.<br>Верных ответов: "+point+" из "+riddles.length);
					hide("button");
					hide("text");
				}
			if(buttonFlag<0){
				document.getElementById("button").innerHTML = "Проверить";
				write(riddles[number][0]);
				buttonFlag*=-1;
			}else{
				point+=ask(riddles[number]);
				number++;
				buttonFlag*=-1;
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

			<h1>Игра в загадки</h1>

			<div class="box">

				<p id="riddle">Вам даётся одна попытка на верный ответ!</p>
				<input type="text" id="userAnswer">

				<br>
				<a href="#" onClick="checkAnswers();" id="button">Играть</a>

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