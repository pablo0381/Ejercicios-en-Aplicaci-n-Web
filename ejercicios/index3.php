<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
	</head>
	<body>
		<?php
require '../menu.php';
        ?>
<br>
        <?php
$numero1 = 9;
$numero2 = 2;

$resultado_suma = $numero1 + $numero2;
$resultado_resta = $numero1 - $numero2;
$resultado_multiplicacion = $numero1 * $numero2;
$resultado_division = $numero1 / $numero2;

echo "La suma de ambos números es:  $resultado_suma <br>";
echo "La resta de ambos números es: $resultado_resta <br>";
echo "La multiplicación de ambos números es: $resultado_multiplicacion <br>";
echo "La división de ambos números es: $resultado_division <br>";
		?>
	</body>
</html>
