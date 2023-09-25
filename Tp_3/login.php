<?php
$usuario = $_POST ["Usuario"] ; 
$contrasenia = $_POST ["Pass"];
$ingusuario = "admin";
$ingpass = 1234;
if ($usuario == $ingusuario && $contrasenia == $ingpass){
echo "Correcto";
header ("location: https://genshin.hoyoverse.com/es/");
}
else {
echo "incorrecto";
header ("location:https://www.youtube.com/watch?v=udBLU0Y_G2s&ab_channel=CotiVEVO");
}

?>
