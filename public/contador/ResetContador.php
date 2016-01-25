<?php

$fa = fopen("contador/contador.txt", "w"); // Abrimos el archivo en modo escritura
fwrite($fa, "");
fclose($fa);
