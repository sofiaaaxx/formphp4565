<?php
$Nombre = $_POST['Nombre'];
$Curso  = $_POST['Curso'];
$Numero = $_POST['Numero'];

$val = $Numero * $Numero * $Numero;

echo "Su nombre es: $Nombre <br>";
echo "Su curso es: $Curso <br>";

if ($val >= 100) {
    echo "Su numero es: $val, que afortunado eh";
} else {
    echo "Su numero es: $val";
}
?>
