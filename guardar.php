<?php
$conexion = new mysqli("localhost", "root", "", "comentarios");

$nombre = $_POST['nombre'];
$barrio = $_POST['barrio'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$conformidad = $_POST['conformidad'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO comentarios (nombre, barrio, edad, genero, conformidad, comentarios)
        VALUES ('$nombre', '$barrio', $edad, '$genero', '$conformidad', '$comentarios')";

$conexion->query($sql);

echo "Comentario enviado correctamente.";
?>
