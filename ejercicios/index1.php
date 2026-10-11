<!DOCTYPE html>
<html>
	<head>
		<title>Edad</title>
	</head>
	<body>
		<?php
require '../menu.php';
        ?>
<br>
        <?php
$edad = 17;

if ($edad >= 18) {
    echo "Eres mayor de edad";
}
	else {
		echo "Eres menor de edad";
}
		?>
	</body>
</html>
