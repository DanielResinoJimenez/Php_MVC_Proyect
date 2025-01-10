<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de libros</title>
    <link rel="stylesheet" href="./Resources/css/listar.css">
</head>

<body>

    <table>
        <caption>Catálogo de Libros</caption>
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
        </tr>
        <?php
        // Hacemos un foreach para mostrar todos los libros almacenados en la base de datos
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro['ISBN'] . "</td>";
            echo "<td>" . $libro['titulo'] . "</td>";
            echo "<td>" . $libro['autor'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="./index.php?action=start">Volver</a>
</body>

</html>