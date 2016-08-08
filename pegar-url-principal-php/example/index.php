<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pegar a url principal php</title>
</head>
<body>
	<?php
	
		include '../baseURI.php';

		$uri = URI::base();

		echo $uri;
	?>
</body>
</html>