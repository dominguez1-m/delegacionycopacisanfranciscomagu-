<?php
$conexion = new mysqli("localhost", "root", "", "comentarios");

$sql = "SELECT * FROM comentarios";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comentarios Registrados</title>
    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #8BC34A;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Lista de Comentarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Barrio</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Conformidad</th>
            <th>Comentarios</th>
            <th>Fecha</th>
        </tr>

        <?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['barrio'] ?></td>
    <td><?= $fila['edad'] ?></td>
    <td><?= $fila['genero'] ?></td>
    <td><?= $fila['conformidad'] ?></td>
    <td><?= $fila['comentarios'] ?></td>
    <td><?= $fila['fecha'] ?></td><td>
  <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a> |
  <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este registro?')">Eliminar</a>
    </td>
</tr>
<?php } ?>
    </table>
</body>
</html>
