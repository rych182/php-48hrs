<?php
//Un programa que imprime por pantalla el cuadrado de los
//primeros 30 numeros naturales.

// for(valor de inicio - condicion -  )


for ($i=0; $i <= 30 ; $i++) { 
	echo "El cuadrado de ".$i." es: ".($i*$i)."<br>";
}

//EXPLICACIÓN DEL CODIGO
//i se inicializa de 1(por que si es de 0 se ejecutaria 31 veces,
// el contenido del for se va a ejecutar
//mientras el valor sea menor o igual a 30, i++ es para que
//la variable vaya avanzando de 1 en 1 


/*RECOMENDACIÓN
Al inciar un ejercicio con for, lo recomendable es que siempre
hagas una prueba imprimiendo numeros para saber si esta bien
escrito tu programa con for, debes avanzar siempre por partes
*/
?>