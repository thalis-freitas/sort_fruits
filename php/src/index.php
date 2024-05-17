<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar frutas</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Patua+One&family=Poppins&display=swap"
          rel="stylesheet">
</head>
<body>
    <header>
        <h1>Ordenação de Listas de Frutas</h1>
    </header>
    <main>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Selecione a lista (.txt):</label>
            <input type="file" name="file" id="file" accept=".txt"> <br>
            <button type="submit">Ordenar</button>
        </form>
    </main>
    <footer>
        <a href="https://github.com/Thalis-Freitas" target="_blank">
            <span> Desenvolvido por:
                <b>Thalis Freitas </b>
            </span>
        </a>
    </footer>

    <?php
    include 'sort_fruits.php';

    handleFileUpload();
    ?>
</body>
</html>
