<?php
$conexion = new mysqli("localhost", "root", "", "nombre_de_tu_base");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM comentarios WHERE id = $id";
    $conexion->query($sql);
}

// Redirige de nuevo a la página de consultas
header("Location: consultas.php");
?>
