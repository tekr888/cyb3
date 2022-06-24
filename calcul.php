<?php
	//Де-факто здесь авторизация доступа
	session_start();
	if (!isset($_SESSION["user"])){
		echo '<meta http-equiv="refresh" content="3; url=login.php"/>';
		die("требуется логин");

	}
?>
<html>
	<head>
	<title>Калькулятор</title>
	<meta charset="utf-8" />
		<style>
		input, button
		{
			margin: 6px
		}
		button
		{
			width: 80px
		}
		</style>
		<script>
			function plus()
			{
				var x,y,z;
				x = parseInt(document.getElementById("num1").value);
				y = parseInt(document.getElementById("num2").value);
				z = x + y;
				document.getElementById("num3").value = z;
			}
		</script>
	
	</head>
	<body>
		<a href = "index1.html">Домой</a><br/>
		<h1>Калькулятор на чистом JS</h1>
		<input type="text" id="num1"/></br>
		<input type="text" id="num2"/></br>
		<button onclick="plus();">+</button>
		<button onclick="minus();">-</button></br>
		<input type="text" id="num3"/>
	</body>
</html>