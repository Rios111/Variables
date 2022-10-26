<?php
$pganados = $_POST['pganados'];
$pperdidos = $_POST['pperdidos'];
$pempatados = $_POST['pempatados'];
$ganado = 3;
$perdido = 0;
$empatado = 1;
$ganado_resultado = $pganados * $ganado;
$perdido_resultado = $pperdidos * $perdido;
$empatado_resultado = $pempatados * $empatado;
$operacion = $ganado_resultado + $perdido_resultado + $empatado_resultado;
echo "El puntaje final es: ".$operacion; 


?>