<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	date_default_timezone_set("America/Sao_Paulo");
	echo "<h1>Hoje é dia " . date("d/M/Y");
	echo " e a hora é " . date("G:i:s T") . "</h1>";
	?>
</body>

</html>