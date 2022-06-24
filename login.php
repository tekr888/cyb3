<html>
	<head>
	<title>Demo PHP</title>
	<meta charset="utf-8" />
	<style>
		input {
			width: 150px;
			margin: 5px;
		}
	</style>
		</head>
	<body>
		<a href = "index1.html">Домой</a><br/>
		<h1>Введите имя и пароль</h1>
		<form action="checklogin.php" method = "POST">
			<input type = "text" name="txtuser"/><br/>
			<input type = "password" name="pwd"/><br/>
			<input type = "submit" value = "Войти"/><br/>
		</form>
	</body>
</html>