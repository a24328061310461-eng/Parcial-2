<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href
    <title>Document</title>
</head>
<body>
$conexion = new mysqli("localhost", "root", "", "elotes");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombrereal = $_POST["nombrereal"];
    $personaje = $_POST["personaje"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $poderes = $_POST["poderes"];
    $sexo = $_POST["sexo"];
    $debilidad = $_POST["debilidad"];
    $creation = $_POST["creation"];
    $biografia = $_POST["biografia"];

    $sql = "INSERT INTO personajes 
    (nombrereal, personaje, altura, peso, poderes, sexo, debilidad, creation, biografia)
    VALUES 
    ('$nombrereal', '$personaje', '$altura', '$peso', '$poderes', '$sexo', '$debilidad', '$creation', '$biografia')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Datos guardados correctamente');</script>";
    } else {
        echo "<script>alert('Error al guardar datos');</script>";
    }
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar tabla</title>
    <style>
        :root {
            --color-de-fondo: #BFDBF7;
            --color-de-letras: #053C5E;
            --color-de-barra: #A31621;
            --color-de-botones: #1F7A8C;
            --color-extra: #DB222A;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--color-de-letras);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: url('imagen.jpg') center/cover no-repeat;
            opacity: 0.3;
        }

        h1 {
            color: var(--color-extra);
            text-align: center;
            margin-top: 20px;
        }

        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            margin-bottom: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid yellow;
            border-radius: 5px;
            background-color: #1f1f1f;
            color: #ffffff;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: yellow;
            color: #000;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            font-size: 16px;
            text-transform: uppercase;
        }

        input[type="submit"]:hover {
            background-color: #ffd700;
        }
    </style>
</head>
<body>

    <h1>Registro de Personajes</h1>

    <form action="" method="post" id="formulario">
        
        <label>Nombre Real:</label>
        <input type="text" name="nombrereal" required>

        <label>Nombre del Personaje:</label>
        <input type="text" name="personaje" required>

        <label>Altura:</label>
        <input type="text" name="altura">

        <label>Peso:</label>
        <input type="text" name="peso">

        <label>Poderes:</label>
        <input type="text" name="poderes">

        <label>Sexo:</label>
        <input type="text" name="sexo">

        <label>Debilidad:</label>
        <input type="text" name="debilidad">

        <label>Fecha de Creación:</label>
        <input type="date" name="creation">

        <label>Biografía:</label>
        <textarea name="biografia"></textarea>

        <input type="submit" value="Guardar Datos">
    </form>

</body>
</html> 
</body>
</html><?php
