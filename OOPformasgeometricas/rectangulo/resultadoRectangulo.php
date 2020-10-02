
<?php

include 'rectangulo.php'; 
//require_once 'triangulo.php'; 

$altura=$_POST['altura'];
$base=$_POST['base'];

echo $altura;
echo "<br>"; 
echo $base;
echo"<br>"; 

$rectangulo= new Rectangulo($base,$altura); 
echo"El perimetro del rectangulo es ".$rectangulo->perimetroRectangulo(); 
echo "<br>";
echo "El área del rectángulo es ".$rectangulo->areaRectangulo(); 

?>