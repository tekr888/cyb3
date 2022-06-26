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
                
		$user = $_REQUEST["txtusername"];
        $useremail = $_REQUEST["txtuseremail"];
        $userlogin = $_REQUEST["txtuserlogin"];
		$pwd = $_REQUEST["pwd"];
		$hash = hash('sha256', $pwd);
        if (empty($user) or empty($useremail) or empty($userlogin) or empty($pwd))
        {
        exit ("Введена не вся информация! Необходимо заполнить все поля!");
        }
        
	    $sql="INSERT INTO users (username, email, login, pwdhash) VALUES (?, ?, ?, ?)";
		$db_server=getenv('cyb3_db_server');
		$db_user=getenv('cyb3_db_user');
		$db_pwd=trim(getenv('cyb3_db_pwd'));
		$conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");

		$stat=mysqli_prepare($conn,$sql);
		mysqli_stmt_bind_param($stat,"ssss",$user,$useremail,$userlogin,$hash);
		mysqli_stmt_execute($stat);
		$result=mysqli_stmt_get_result($stat);

		//$num_rows = mysqli_num_rows($result);
		//mysqli_close($conn);
		
			//if ($num_rows >=1){
			//echo "<h1>Пользователь, $user зарегистрирован</h>";
			//$_SESSION["user"]=$user;
		//}
			//else{
				//echo "<h1>Что-то пошшло не так</h1>";
			//}
			
	?>

	</body>
</html>