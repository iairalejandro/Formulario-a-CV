<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Enviados</title>
</head>
<body>
    <h1>Datos Enviados:</h1>
    <?php
    // Obtener los datos del formulario
    $nombre = ($_POST['nombre']);
    $fecha_nacimiento = ($_POST['fecha_nacimiento']);
    $ocupacion = ($_POST['ocupacion']);
    $ocupacionFormateado = ucwords(strtolower($ocupacion));
    $contacto = ($_POST['contacto']);
    $nacionalidad = ($_POST['nacionalidad']);
    $nivel_ingles = ($_POST['nivel_ingles']);
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? implode(", ", $_POST['lenguajes_programacion']) : '';
    $aptitudes = ($_POST['aptitudes']);
    $habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
    $perfil = ($_POST['perfil']);

    // Mostrar los datos
    echo "<p><strong>Nombre y Apellidos:</strong> $nombre</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> $fecha_nacimiento</p>";
    echo "<p><strong>Ocupación:</strong> $ocupacionFormateado</p>";
    echo "<p><strong>Contacto:</strong> $contacto</p>";
    echo "<p><strong>Nacionalidad:</strong> $nacionalidad</p>";
    echo "<p><strong>Nivel de Inglés:</strong> $nivel_ingles</p>";
    echo "<p><strong>Lenguajes de Programación:</strong> $lenguajes_programacion</p>";
    echo "<p><strong>Aptitudes:</strong> $aptitudes</p>";
    echo "<p><strong>Habilidades:</strong> $habilidades</p>";
    echo "<p><strong>Perfil:</strong> $perfil</p>";
    ?>
</body>
</html>
