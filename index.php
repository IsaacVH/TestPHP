<html>
	<head></head>
	<body>
<?php
	//$user = GetUserDataSomehow();
	$user->name = "Isaac";	

	for($i = 0; $i < 12; $i++) {
		echo "<div>".$user->name."</div>";
	}

?>
	</body>
</html>

