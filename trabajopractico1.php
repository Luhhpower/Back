<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Trabajo Practico n1</h1>
   
<?php
/* Imprimir por pantalla "Hola Mundo" */
    echo "Hola Mundo";

     print "<br>" ;
/* Crear en una variable la cadena de caracteres "Hola mundo" e imprimirlo */
    $saludo = "Hola mundo";
     echo $saludo;
        print "<br>";
/* Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera */
    $num1 = 10 ;
    $num2 = 5 ;

    $resta = $num1 - $num2;
    $suma = $num1 + $num2;
    $multiplicar = $num1 * $num2;
    $dividir = $num1 / $num2;
    $resto = $num1 % $num2;

    echo "<h2>El resultado de la resta es: </h2>" ;
    echo $resta;
    print "<br>";
    echo "<h2>El resultado de la suma es: </h2>" ;
    echo $suma;
    print "<br>";
    echo "<h2>El resultado de la multiplicacion es: </h2>" ;
    echo $multiplicar;
    print "<br>";
    echo "<h2>El resultado de la division es: </h2>" ;
    echo $dividir;
    print "<br>";
    echo "<h2>El resto es: </h2>" ;
    echo $resto;
    print "<br>";
    /* Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
pantalla.
 */
$celsius = 25;
$fahrenheit = ($celsius* 9/5) + 32;
echo "<h2>En grados fahrenheit son: </h2>";
echo $fahrenheit ;
print "<br>";
/* Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm */
$lado1 = 18;
$lado2 = 12;

$area = $lado1*$lado2;
$perimetro = 2*$lado1 + 2*$lado2;
echo "<h2>El area del rectangulo es: </h2>";
echo $area;
print "<br>";
echo "<h2>El perimetro del rectangulo: </h2>";
echo $perimetro;
print "<br>";
/*Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.  */
$radio = 30;
const pi = 3.14;
$area_circulo = pi * $radio**2;
$perimetro_circulo = 2*pi*$radio;
echo "<h2>El area del circulo: </h2>";
echo $area_circulo;
echo "<h2>El perimetro del circulo es: </h2>";
echo $perimetro_circulo;

    ?>
</body>
</html>