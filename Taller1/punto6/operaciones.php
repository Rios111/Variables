<?php
$numvolantes = $_POST['numvolantes'];
$numposters = $_POST['numposters'];
$tarjetas = $_POST['tarjetas'];
$valor_volante = 2000;
$valor_poster = 5000;
$valor_tarjetas = 500;
$valor_final_volantes = $numvolantes * $valor_volante;
$valor_final_posters = $numposters * $valor_poster;
$valor_final_tarjetas = $tarjetas * $valor_tarjetas;
$operacion = $valor_final_volantes + $valor_final_posters + $valor_final_tarjetas;

echo " El valor total de todos los volantes es: ".$valor_final_volantes;
echo "<br>";
echo " El valor total de todos los posters es: ".$valor_final_posters;
echo "<br>";
echo " El valor total de todos las tarjetas es: ".$valor_final_tarjetas; 
echo "<br>";    

echo " El valor total de las impresiones es: ".$operacion." , muchas gracias. "; 



?>