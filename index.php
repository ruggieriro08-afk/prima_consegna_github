<?php 

$base=$_POST["base"];
$altezza=$_POST["altezza"];

echo "La base inserita è " . $base . "<br>";
echo "L'altezza inserita è " . $altezza . "<br><br>";

$perimetro =($base+$altezza)*2;
$area = $base * $altezza;

echo "Il perimetro è " . $perimetro . "<br>"
echo "L'area è " . $area 