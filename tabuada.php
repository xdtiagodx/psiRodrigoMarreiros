<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$valor=$_POST["valor"];
	echo 'Tabuada';
	for ($i = 1; $i <= 10 ; $i++) {
		$resultado=$i*$valor;
		echo "<br>".$i."*".$valor."=".$resultado;
	}
	?>
</body>
</html>
