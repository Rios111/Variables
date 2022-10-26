<?php
$nom = $_POST['nom'];
$asig = $_POST['asig'];
$cali = $_POST['cali'];



if ($cali >= 7) {
    echo " Felicitaciones ".$nom." has aprobado ".$asig;
} else {
     echo " Lo siento ".$nom." has reprobado ".$asig;
}



?>

