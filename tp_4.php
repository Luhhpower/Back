<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
</head>
<body>
    <?php
//Mostrar los números del 1 al 100.

$i = 1 ;
while ($i <= 100) {
    print "<p>$i</p>\n" ;
       $i++;
}
//Mostrar los números del 100 al 1.

$i = 100 ;
while ($i >= 1) {
    print "<p>$i</p>\n" ;
       $i--;
}
//Mostrar los números pares del 1 al 100.

for ($i=1; $i <= 100; $i++) { 
  if ($i % 2 == 0) {
   echo "<p>$i</p>\n";
  }
}
//Mostrar los números impares del 1 al 100.

for ($i=1; $i <= 100; $i++) { 
  if ($i % 2 != 0) {
   echo "<p>$i</p>\n";
  }
}
//Mostrar la suma de los números de 1 a 20.

$suma = 0;
for ($i=1; $i <= 20 ; $i++) { 
  $suma += $i ;
}
print "<p>$suma</p>\n";
//Mostrar la suma de números pares de 1 a 20

$suma = 0;
for ($i=1; $i <= 20 ; $i++) { 
    if ($i % 2 == 0) {
        $suma += $i ;
    }
}
print "<p>$suma</p>\n"
    ?>

</body>
</html>