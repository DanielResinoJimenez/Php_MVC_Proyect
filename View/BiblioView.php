<?php

class ListarLibros
{

    //Muestra la lista de las tareas
    public function mostrarLibros($libros)
    {
        // Genera una tabla con las tareas
        echo "<table>";
        echo "<tr><th>ISBN</th><th>Titulo</th><th>Autor</th></tr>";
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>" . $libro['ISBN'] . "</td>";
            echo "<td>" . $libro['titulo'] . "</td>";
            echo "<td>" . $libro['autor'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
