<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practico3</title>
</head>
<body>
    <h1>Crear un archivo “tp3_backend.php” y realizar los siguientes ejercicios:</h1>
    <P>1. Mostrar los números del 1 al 100.</P>
    <?php
    $i=1;
    while ($i<=100){
        echo"$i".",";
        $i++;
    }
    ?>
    <P>2. Mostrar los números del 100 al 1.</P>
    <?php
    $i=100;
    while($i>=1){
        echo"$i".",";
        $i--;
    }
    ?>
    <P>3. Mostrar los números pares del 1 al 100</P>
    <?php
   
    for( $i=1; $i<=100;$i++) {
        if($i % 2==0) {
            echo"$i".",";
        }
        
    }
?>
<P>4. Mostrar los números impares del 1 al 100.</P>
<?php
for($i=1;$i<=100;$i++){
  if($i % 2!=0) {
    echo"$i".",";
}

}
?>
<P>5. Mostrar la suma de los números de 1 a 20.</P>

<?php
$suma=0;
for($i=1;$i<=20;$i++){
    $suma += $i;

}
echo"la suma de 1 a 20 es $suma";
?>
<P>6. Mostrar la suma de números pares de 1 a 20.</P>
<?php
$suma=0;
for($i=1;$i<=20;$i++){

    if($i%2==0)
    $suma += $i;
    
}
echo"la suma de numeros pares de 1 a 20 es $suma";
?>


</body>
</html>
