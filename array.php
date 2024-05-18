<?php
$fruits = [0];
print_r($fruits);
$fruits [0] = "hijau";
$fruits[2] = "Hijau";
print_r($fruits);

echo "<br>";
//menghitung total data di array
echo count($fruits);
echo"<br>";
//menambah data diakhir data array
array_push($fruits,"mangga", "apel");
print_r($fruits);
echo "<br>";

//cek data di array
var_dump("Hijau", $fruits);
echo "<br>";

$last = array_pop($fruits);
print_r($fruits);
echo "<br>";
echo $last;

unset($fruits);
echo "<br>";
print_r('$fruits');
echo "<br>";    
echo $_SERVER;




?>