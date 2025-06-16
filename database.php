<?php
// database.php

$db = new PDO('sqlite:livraria.db');

// Criação da tabela, caso não exista
$db->exec("CREATE TABLE IF NOT EXISTS livros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT NOT NULL,
    autor TEXT NOT NULL,
    ano INTEGER NOT NULL
)");
?>
