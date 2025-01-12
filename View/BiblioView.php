<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblio Management</title>
    <link rel="stylesheet" href="./../Resources/css/listar.css">
</head>

<body>
    <header>
        <div class="header-container">
            <h1 class="title">Biblioteca Online</h1>
            <nav>
                <ul class="nav-links list">
                    <li class="list-item"><a href="#" class="list-link">Inicio</a></li>
                    <li class="list-item"><a href="#" class="list-link">Catálogo</a></li>
                    <li class="list-item"><a href="#" class="list-link">Reservas</a></li>
                    <li class="list-item"><a href="#" class="list-link">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div>
            <a href="./../index.php?action=listarLibros">Listar libros</a>
            <a href="./../index.php?action=insertLibros">Insertar libros</a>
            <a href="./../index.php?action=modifyLibros">Modificar libros</a>
            <a href="./../index.php?action=deleteLibros">Borrar libros</a>
            <a href="./../index.php?action=reservLibros">Reservar un libro</a>
        </div>
    </main>

</body>

</html>