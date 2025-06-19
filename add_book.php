<?php
require 'database.php';

if (!empty($_POST['titulo']) && !empty($_POST['autor']) && !empty($_POST['ano'])) {
    $stmt = $db->prepare("INSERT INTO livros (titulo, autor, ano) VALUES (:titulo, :autor, :ano)");
    $stmt->bindParam(':titulo', $_POST['titulo']);
    $stmt->bindParam(':autor', $_POST['autor']);
    $stmt->bindParam(':ano', $_POST['ano']);
    $stmt->execute();
}

header('Location: index.php');
exit;
?>
