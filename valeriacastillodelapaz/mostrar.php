<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mostrar tabla</title>

<style>
    body{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("imagen.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        text-align: center;
    }

    h1{
        margin-top: 30px;
        font-size: 40px;
        text-shadow: 2px 2px 5px black;
    }

    h3{
        font-size: 22px;
        margin-bottom: 30px;
        text-shadow: 1px 1px 3px black;
    }

    table{
        margin: auto;
        border-collapse: collapse;
        width: 95%;
        background-color: rgba(0,0,0,0.8);
        backdrop-filter: blur(5px);
        box-shadow: 0px 0px 15px black;
    }

    th{
        background-color: #ff9800;
        color: white;
        padding: 10px;
        font-size: 14px;
    }

    td{
        padding: 8px;
        font-size: 13px;
    }

    tr:nth-child(even){
        background-color: rgba(255,255,255,0.1);
    }

    tr:hover{
        background-color: rgba(255,255,255,0.3);
        transition: 0.3s;
    }

    img{
        width: 100px;
        border-radius: 10px;
    }
</style>

</head>
<body>

<h1>Aqui voy a mostrar mi tabla</h1>
<h3>Valeria Castillo</h3>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = "root";
$password = "";
$server = "localhost";
$database = "elotes";

$conexion = new mysqli($server, $username, $password, $database);

if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}

$sql = "SELECT * FROM personajes";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {

    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Personaje</th>
            <th>Altura</th>
            <th>Peso</th>
            <th>Poderes</th>
            <th>Sexo</th>
            <th>Debilidad</th>
            <th>Creacion</th>
            <th>Biografia</th>
            <th>Imagen</th>
          </tr>";

    while ($row = $resultado->fetch_assoc()) {

        $imagen = base64_encode($row['imagen']);

        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombrereal"]."</td>
                <td>".$row["personaje"]."</td>
                <td>".$row["altura"]."</td>
                <td>".$row["peso"]."</td>
                <td>".$row["poderes"]."</td>
                <td>".$row["sexo"]."</td>
                <td>".$row["debilidad"]."</td>
                <td>".$row["creation"]."</td>
                <td>".$row["biografia"]."</td>
                <td><img src='data:image/jpeg;base64,$imagen'/></td>
              </tr>";
    }

    echo "</table>";

} else {
    echo "No se encontraron registros en la base de datos";
}

$conexion->close();
?>

</body>
</html>