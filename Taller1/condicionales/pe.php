<?php
$cam1 = $_POST['cam1'];
$cam2 = $_POST['cam2'];
$cam3 = $_POST['cam3'];






/* 
Operadores

== igualdad
> mayor que 
< menor que 
>= mayor o igual
<= menor o igual 

& y 
or o

*/

/* if (condition) {
    // Codigo que se responde cuando la respuesta es postivia
} else {
        // Codigo que se responde cuando la respuesta es negativa
}
 */

/* if ($n1==$n2) {
    echo "los valores son iguales";
} elseif($n1>$n2){
    echo $n1."es mayor que".$n2;
}
 */

if ($cam1 > $cam2 && $cam1 > $cam3) {
    echo $cam1." Es mayor que ". $cam2." y ".$cam3;
} elseif($cam2 > $cam1 && $cam2 > $cam3){
    echo $cam2." Es mayor que ". $cam1." y ".$cam3;
} elseif($cam3 > $cam1 && $cam2 > $cam1){
    echo $cam3." Es mayor que ".$cam2." y ".$cam1;
}




/* if($cam1>$cam2){
    echo $cam1."Es mayor que ". $cam2. " y ".$cam3;
}elseif ($cam1>$cam3) {
    echo $cam2. "Es mayor que ". $cam1. " y ". $cam3;
} */
?>