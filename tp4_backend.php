<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matrices</title>
</head>
<body>
<p>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</P>
<?php
$pares =[2,4,6,8,10,12,14,16,18,20 ];
print "<pre>";
print_r($pares);
print"</pre>";
?>
<p>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().</p>
<?php
$matriz = ["pedro","ana",34,1];
print "<pre>";
print_r($matriz);
print"</pre>";
?>
<p>3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
</p>
<?php
$datos = [
"nombre" => "pedro","apellido" => "torres","direccion" => "av. mayor 3703","telefono" => "1122334455"
];
?>

4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.

<?php
$ciudades = [ "madrid","barcelona", "londres","new york","los angeles","chicago"];
foreach ($ciudades as $indice_1=> $valor )
    print"</p> la ciudad con el $indice_1 tiene el nombre de $valor</p>"

?>
<p>otra forma de hacerlo</P>

<?php
$ciudades = [ "madrid","barcelona", "londres","new york","los angeles","chicago"];
$extens = count($ciudades);
for($i = 0; $i<$extens;$i++){


print ("<p>la ciudad con el indice " . $i . " tiene el nombre " . $ciudades[$i]. "</p>\n");
}
?>
5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.
  <?php
$ciudades_2 =["MD"=>"Madrid", "BCL"=>"Barcelona","LD"=>"Londres", "NY"=>"New York","LA"=>"Los Angeles","CCG"=>"Chicago"];
foreach($ciudades_2 as $indice => $ciudades_2valor)
print"</p> el indice de $ciudades_2valor es $indice </p>"
?>

</body>
</html>
