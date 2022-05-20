<?php
include ("conexion.php");
//Se llama a la funcion y se valida si hay conexion con un mensaje
if ($con=conectar()){
    echo "Se estableció la conexión con el Servidor :D";
} else{
    echo "ha ocurrido un problema :(";
}
?>

<h3>Hola mundo!!</h3>



