<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "orangecaramel"; //<-- aqui va tu base de datos de comics

$conexion = new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) {
die("Conexion fallida: " . $conexion->connect_error);
}

//son los datos del formulario de la página de captura
$nombre = htmlspecialschars($_POST('nombre'));
$alias = htmlspecialschars($_POST('alias'));
$fechacreacion = htmlspecialschars($_POST('fechacreacion'));
$descripcion = htmlspecialschars($_POST('descripcion'));
$comics = htmlspecialschars($_POST('comics'));
$superpoderes = htmlspecialschars($_POST('superpoderes'));

?>