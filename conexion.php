<?php
function conectar () {
$con = mysqli_connect("localhost","importuser", "importaciones", "importdb");
return $con;
}
?>