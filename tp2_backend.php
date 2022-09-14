<h1>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:</h1>
<h2>1. Crear una variable n y validar que sea un número positivo.</h2>
<?php
$galletas=20;
if ($galletas>0) {
 echo "$galletas es un numero positivo";
}
 elseif ($galletas<0){
    echo "$galletas no es un numero positivo";
 }
 else{
    echo "$galletas es un numero neutro";
 }
 ?>
<br>
<h3>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h3>
<?php
$gatos=5;
if (($gatos>1)&($gatos<10)){
    echo "$gatos es un numero mayor a 1 y menor a 10";
}
?>
<br>
<h4>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h4>
<?php
$perros=1;
if(($perros>10)||($perros<2)) {
    echo"$perros es un numero menor a 2";
}
    ?>
    <br>
    <h5>Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</h5>
  <?php
  $var_1=30;
  $var_2=40;
  if($var_1>$var_2){
    echo "el resultado de la suma entre las variables es ".($var_1+$var_2);
    ?>
    <br>
    <?php
    echo "el resultado de la resta entre las variables es ".($var_1-$var_2);}
  elseif ($var_2>$var_1){
    echo "el resultado de la multiplicacion entre las variables es ".($var_2*$var_1);
    ?>
    <br>
    <?php
    echo "el resultado de la division entre las variables es ".($var_2/$var_1);
    ?>
    <br>
    <?php
    echo "el resultado del resto  entre las variables es ".($var_2%$var_1);
  }
  else{
    echo "los numeros ingresados son iguales";
  }
  ?>
  





