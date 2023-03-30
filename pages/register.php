<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>

<body>
	<?php
	require_once('router/routeur.php');
	$uri = $_SERVER['REQUEST_URI'];
	$router = new \router\make\make();
	echo $router->getParam($uri);
	?>
	<h3> C'est ma page d'inscription!!</h3>
</body>

</html>