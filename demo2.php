<html>
	<head>
	<title>Demo PHP</title>
	<meta charset="utf-8" />
		</head>
	<body>
		<a href = "index1.html">Домой</a><br/>
		<h1>Hello from PHP</h1>
		<?php
			$x = 2;
			$y = 2;
			$z = $x + $y;
			echo "<h2>результат вычесления: $z</h2>";
			
			date_default_timezone_set("Europe/Moscow");
			$now = date("H:i:s");
			echo "<h3>время: $now</h3>";
		?>
		<form action="doubler.php">
			<input name="num1"/>
				<button>x2</button>
		</form>
	</body>
</html>