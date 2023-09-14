<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trabajo práctico n°2</h1>
<?php 
/* Crear una variable n y validar que sea un número positivo. */
$a = 4;
if ($a > 0) {
  echo "Es un número positivo";
}
print "<br>" ;
/* Crear una variable n y validar que sea un número mayor a 1 y menor a 10 */
$b = 2;
if ($b>1 & $b<10) {
    echo "Este número se encuentra entre el 1 y el 10";
}
print "<br>" ;
/* Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
 */
$c = 15;
if ($c>10 || $c<2) {
    echo "Es un número mayor a 10 o menor a 2";
}
print "<br>" ;
 /*Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.  */
$numero1 = 8;
$numero2 = 8;
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1*$numero2;
$division = $numero1 / $numero2;
$resto = $numero1 % $numero2;

if ($numero1>$numero2){
    echo $suma;
    print "<br>" ;
    echo $resta;
} 
elseif ($numero2>$numero1) {
    echo $multiplicacion;
    print "<br>" ;
    echo $division;
    print "<br>" ;
    echo $resto;
}
else  {
    echo "Los numeros son iguales";
}


?>
</body>
</html>