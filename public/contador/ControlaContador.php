<?php

$fp = fopen("contador/contador.txt", "r"); // Abrimos el fichero donde guardaremos y leeremos las visitas

$visitas = intval(fgets($fp)); // Leemos las visitas y usamos intval para asegurarnos de que devuelve un entero

$visitas++; // Incrementamos las visitas

fclose($fp); // Cerramos el archivo pues lo vamos a volver a abrir en modo escritura

$fp = fopen("contador/contador.txt", "w"); // Abrimos el archivo en modo escritura

fputs($fp, $visitas); // Escribimos las visitas sumadas

return $visitas; // Mostramos las visitas
