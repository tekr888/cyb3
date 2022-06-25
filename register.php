<html>
	<head>
	<title>Регистрация нового пользователя</title>
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
        <h1>Регистрация нового пользователя</h1></br>
		<form action="checkregister.php" method = "POST">
            Ваше имя:</br>
                <input type = "text" name="txtusername"/><br/>
            Ваш email:</br>
                <input type = "text" name="txtuseremail"/><br/>
            Ваш логин:</br>
			    <input type = "text" name="txtuserlogin"/><br/>
            Ваш пароль:</br>
			<input type = "password" name="pwd"/><br/>
			<input type = "submit" value = "Зарегистрироваться"/><br/>
		</form>
	</body>
</html>