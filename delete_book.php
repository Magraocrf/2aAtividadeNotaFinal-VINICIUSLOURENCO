<?php
require 'database.php';

if (!empty($_POST['id'])) {
    $stmt = $db->prepare("DELETE FROM livros WHERE id = :id");
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->execute();
}

header('Location: index.php');
exit;
?>
