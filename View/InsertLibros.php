<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar un libro</title>
    <link rel="stylesheet" href="./../Resources/css/listar.css">
</head>

<body class="body-insert">
    <div class="form-container">
        <h2>Registrar Libro</h2>
        <form method="POST" action="./../index.php?action=insert">
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" placeholder="978XXXXXXXXXX" required>
            </div>
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título del libro" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" placeholder="Nombre del autor" required>
            </div>
            <div class="form-group">
                <button type="submit">Registrar</button>
            </div>
        </form>
        <a href="./BiblioView.php" class="back-link">Volver</a>
    </div>
</body>

</html>