<?php
// Iniciar sesión
session_start();

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$ocupacionFormateado = ucwords(strtolower($ocupacion));
$contacto = $_POST['contacto'];
$nacionalidad = $_POST['nacionalidad'];
$nivel_ingles = $_POST['nivel_ingles'];
$lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? implode(", ", $_POST['lenguajes_programacion']) : '';
$aptitudes = $_POST['aptitudes'];
$habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : '';
$perfil = $_POST['perfil'];

// Guardar los datos en variables de sesión
$_SESSION['nombre'] = $nombre;
$_SESSION['fecha_nacimiento'] = $fecha_nacimiento;
$_SESSION['ocupacion'] = $ocupacionFormateado;
$_SESSION['contacto'] = $contacto;
$_SESSION['nacionalidad'] = $nacionalidad;
$_SESSION['nivel_ingles'] = $nivel_ingles;
$_SESSION['lenguajes_programacion'] = $lenguajes_programacion;
$_SESSION['aptitudes'] = $aptitudes;
$_SESSION['habilidades'] = $habilidades;
$_SESSION['perfil'] = $perfil;

// Redirigir a la página del CV
header("Location: cv.php");
exit;
?>
