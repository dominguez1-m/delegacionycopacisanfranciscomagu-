<?php
$conexion = new mysqli("localhost", "root", "", "comentarios");

$id = $_GET['id'];
$sql = "SELECT * FROM comentarios WHERE id = $id";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Comentario</title>
</head>
<body>
    <h2>Editar Comentario</h2>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $fila['id'] ?>">

        Nombre: <input type="text" name="nombre" value="<?= $fila['nombre'] ?>"><br>
        Barrio:
        <input type="text" name="barrio" value="<?= $fila['barrio'] ?>"><br>
        Edad: <input type="number" name="edad" value="<?= $fila['edad'] ?>"><br>
        Género:
        <input type="text" name="genero" value="<?= $fila['genero'] ?>"><br>
        Conformidad:
        <input type="text" name="conformidad" value="<?= $fila['conformidad'] ?>"><br>
        Comentarios:<br>
        <textarea name="comentarios"><?= $fila['comentarios'] ?></textarea><br>

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
