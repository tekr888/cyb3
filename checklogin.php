<?php
	session_start();
?>
<html>
	<head>
	<title>Проверка</title>
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
	<?php
		$user = $_REQUEST["txtuser"];
		$pwd = $_REQUEST["pwd"];
		$hash = hash('sha256', $pwd);
		//Ниже ряд нарушений безопасноти
		//1.weak password + делегировали ответственности администратору сервера в переменные окружения
		//2.нарущение принципа наименьших привилегий
		//3.секрет в коде
		//4.Уязвимость для sql + //user: user1' OR (1=1) --bbbbbbbbbbbb

		//$sql = "SELECT * FROM users WHERE username='$user' AND pwdhash='$hash'";
		//$sql = "SELECT * FROM users WHERE login='$user' AND pwdhash='$hash'";
		//echo $sql;

		//Параметрический запрос
		$sql = "SELECT * FROM users WHERE login=? AND pwdhash=?";
		//Извлекаем из среды переменных в системе.
		$db_server=getenv('cyb3_db_server');
		$db_user=getenv('cyb3_db_user');
		$db_pwd=trim(getenv('cyb3_db_pwd'));
		$conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");
		
		//$result = mysqli_query($conn, $sql);
		//echo $result;
		//var_dump(mysqli_num_rows($result));

		//Избавляет от sql injection
		$stat=mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stat,"ss",$user,$hash);
		mysqli_stmt_execute($stat);
		$result=mysqli_stmt_get_result($stat);

		$num_rows = mysqli_num_rows($result);
		mysqli_close($conn);
		
		//if ($pwd == "123456") {
			if ($num_rows >=1){
			echo "<h1>Привет, $user</h>";
			$_SESSION["user"]=$user;
		}
			else{
				echo "<h1>Неверный пароль</h1>";
			}
			
	?>

	</body>
</html>