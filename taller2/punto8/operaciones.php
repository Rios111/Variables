<?php
$edad = $_POST['edad'];
$sex = $_POST['sex'];
$jubilacion_m = 54;
$jubilacion_h = 63;

if (($edad >= 54) && ($sex == "f" or "femenino" or "mujer")) {
    echo "Ya te puedes jubilar señora";
} elseif(($edad >= 63) && ($sex == "m" or "masculino " or "hombre")){
    echo "Ya te puedes jubilar señor";
}
else {
    echo "No te puedes jubilar, la edad minima para los hombres es 63 y para las mujeres 54";
}


?>