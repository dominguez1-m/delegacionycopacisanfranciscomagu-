<?php
$conexion = new mysqli("localhost", "root", "", "comentarios");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$barrio = $_POST['barrio'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$conformidad = $_POST['conformidad'];
$comentarios = $_POST['comentarios'];

$sql = "UPDATE comentarios SET
    nombre = '$nombre',
    barrio = '$barrio',
    edad = $edad,
    genero = '$genero',
    conformidad = '$conformidad',
    comentarios = '$comentarios'
    WHERE id = $id";

$conexion->query($sql);

header("Location: consultas.php");
?>
