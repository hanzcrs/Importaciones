<?php
include ("conexion.php");
//Se llama a la funcion y se valida si hay conexion con un mensaje
if ($con=conectar()){
    echo "Se establecio conexion hacia el Servidor";
} else{
    echo "ha ocurrido un problema";
}
?>

