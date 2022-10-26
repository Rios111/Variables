<?php
$capi = $_POST['capi'];
$interes_2 = 0.02;
$interes_4 = 0.045;
$interes_7 = 0.07;
$suma_interes1 = $capi * $interes_2 + $capi;
$suma_interes2 = $capi * $interes_4 + $capi;
$suma_interes3 = $capi * $interes_7 + $capi;





echo "Valor ingresado: ".$capi;
echo "<br>";

if ($capi < 500) {
    $capi * $interes_2;
    echo "El total a pagar es: ".$suma_interes1;
} elseif (($capi > 500) && ($capi < 1500)){
   $capi * $interes_4;
   echo "El total a pagar es: ".$suma_interes2;
} else{
    $capi * $interes_7;
    echo "El total a pagar es: ".$suma_interes3;
}

?>