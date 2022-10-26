<?php
$valor = $_POST['valor'];
$porcentaje = 0.2;

$descuento = $valor * $porcentaje;
$sub_des = $valor - $descuento;

if ($valor >= 20000) {
    echo "Felicitaciones, se aplicó el 20% de descuento. Debes pagar: ".$sub_des;
} else {
    echo "Lo sentimos, debes pagar".$valor."No se aplicó el descuento";
}






?>