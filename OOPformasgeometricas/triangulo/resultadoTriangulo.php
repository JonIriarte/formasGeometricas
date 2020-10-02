
<?php

include 'triangulo.php'; 
//require_once 'triangulo.php'; 

$altura=$_POST['altura'];
$base=$_POST['base'];

echo $altura;
echo "<br>"; 
echo $base;
echo"<br>"; 

$triangulo= new Triangulo($base,$altura); 
echo"El área del triangulo es ".$triangulo->areaTriangulo(); 
echo "<br>";
echo "El perímetro del triangulo es ".$triangulo->perimetroTriangulo(); 

?>