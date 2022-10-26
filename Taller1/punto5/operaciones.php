<?php
$edadhermano1 = $_POST['edadhermano1'];
$edadhermano2 = $_POST['edadhermano2'];
$edad_diferencia1 = $edadhermano1 - $edadhermano2;
$edad_diferencia2 = $edadhermano2 - $edadhermano1;
if ($edadhermano1 >= $edadhermano2)  {
    $edadhermano1 - $edadhermano2;

    echo " La edad del hermano mayor es: ".$edadhermano1." y tiene ".$edad_diferencia1." años "." de diferencia al hermano menor ";
} else if  ($edadhermano1 <= $edadhermano2){
    $edadhermano2 - $edadhermano1;

    echo " La edad del hermano mayor es: ".$edadhermano1." y tiene ".$edad_diferencia2." años "." de diferencia al hermano menor ";
}
?>