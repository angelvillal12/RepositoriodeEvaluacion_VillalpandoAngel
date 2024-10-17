<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$Empleados = [["Nombre" => "Leo", "Sueldo" => 3000],["Nombre" => "Diana", "Sueldo" => 2500],
["Nombre" => "Pablo", "Sueldo" => 4000],["Nombre" => "Edgar", "Sueldo" => 3500],["Nombre" => "Ivana",
"Sueldo" => 2800]];

usort($Empleados, function($A, $B) {
    return $A["Sueldo"] <=> $B["Sueldo"];
});

echo "Empleados: ";
echo "<br>"; 

foreach ($Empleados as $Empleado) {
    echo $Empleado["Nombre"] . "Sueldo: " . $Empleado["Sueldo"];
    echo "<br>";
}

array_push($Empleados, ["Nombre" => "Carlos", "Sueldo" => 3200]);
array_push($Empleados, ["Nombre" => "Daniel", "Sueldo" => 3600]);

echo "Empleados nuevos: "; 
echo "<br>"; 

foreach ($Empleados as $Empleado) {
    echo $Empleado["Nombre"] . "Sueldo: " . $Empleado["Sueldo"];
    echo "<br>";
}

?>

</body>
</html>