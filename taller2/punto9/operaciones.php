<?php
$pri = $_POST['pri'];
$seg = $_POST['seg'];
$ter = $_POST['ter'];

$primera = $pri * 0.3;
$segunda = $seg * 0.3;
$tercera = $ter * 0.4;

$suma = $primera + $segunda + $tercera;

if ($suma >= 4.0) {
    echo "Felicitaciones, has aprobrado con: ".$suma;
} else {
    echo "Lo lamentamos, has reprobado con: ".$suma;
}
?>