<?php
/*Identifica cual es numero par o impar*/
for ($i=1; $i <= 30 ; $i++) { 
	$cuadrado = $i*$i;
	echo "El cuadrado de ".$i." es: ".$cuadrado;

if ($cuadrado%2 == 0) {
	echo "y es par";
} else {
	echo "y es IMPAR";
}

echo "<br>";

}
?>