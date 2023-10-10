<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP5</title>
</head>
<body>
<?php 
//Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

$num_pares = [2 , 4 , 6 , 8 , 10 , 12 , 14 , 16 , 18 , 20];
foreach ($num_pares as $value) {
    print  "<p>$value</p>\n";  
}

//Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz.

$datos = ["pedro" , "ana" ,34 , 1];
   print_r ($datos);

//Crear un array asociativo
$datos = [
'nombre' => "pedro",
'apellido' => "Torres",
'direccion' => "Av. Mayor 3703",
'telefono' => 1122334455
];
/*Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.*/

$ciudad = ["Madrid", "Barcelona" , "Londres" , "Nueva York" , "Los Angeles", "Chicago"];
print "<p>La ciudad con indice 3 es:</p>";
print  $ciudad [3];

/* Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD. */

$ciudad = [ 'MD' => "Madrid",
            'BCL' => "Barcelona" ,
            'LD' => "Londres" , 
            'NY' => "Nueva York" , 
            'LA' => "Los Angeles", 
            'CCG'=> "Chicago"
    ];
print "<p>La ciudad con indice MD es:</p>";
print  $ciudad ["MD"];



?>   



</body>
</html>