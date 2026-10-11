<!DOCTYPE html>
<html>
	<head>
		<title>Numero Invertido</title>
	</head>
	<body>
		<?php
require '../menu.php';
        ?>
<br>
        <?php
$numero_base = 15;

for ($i = 1; $i <= $numero_base; $i++)
    {echo "$i ";}

echo "<br>";

for ($i = $numero_base; $i >= 1; $i--)
    {echo "$i ";}
		?>
	</body>
</html>
