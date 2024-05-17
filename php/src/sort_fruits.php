<?php

function readFruitsFile($arquivo) {
    $fruits = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $fruits;
}

function sortFruits(&$fruits) {
    usort($fruits, 'strcasecmp');
}

function showFruits($fruits) {
    echo "<h1>Frutas Ordenadas:</h1>";
    echo "<section>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</section>";
}

function handleFileUpload() {
    if (isset($_SERVER['REQUEST_METHOD'])
        && $_SERVER['REQUEST_METHOD'] === 'POST'
        && isset($_FILES['file'])
    ) {
        $arquivo = $_FILES['file']['tmp_name'];

        if (is_uploaded_file($arquivo)) {
            $fruitList = readFruitsFile($arquivo);

            sortFruits($fruitList);
            showFruits($fruitList);
        } else {
            echo "<p> Erro no upload do arquivo. </p>";
        }
    }
}
?>
