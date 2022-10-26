<?php
$nom_estudiante = $_POST['nomestudiante'];
$asignatura = $_POST['asignatura'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$divisor = 3;
$operacion = ($nota1 + $nota2 + $nota3) / $divisor ;
echo "Nombre del estudiante: ".$nom_estudiante;
echo "<br>"; 
echo " El promedio de ".$asignatura." es: ".$operacion; ;
?>