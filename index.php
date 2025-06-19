<?php
require 'database.php';

// Buscar todos os livros
$result = $db->query("SELECT * FROM livros ORDER BY id DESC");
$livros = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Livraria</title>
</head>
<body>
    <h1>Livros Cadastrados</h1>
    <?php if (count($livros) > 0): ?>
        <ul>
            <?php foreach ($livros as $livro): ?>
                <li>
                    <strong><?= htmlspecialchars($livro['titulo']) ?></strong> - 
                    <?= htmlspecialchars($livro['autor']) ?> (<?= $livro['ano'] ?>)
                    <form method="post" action="delete_book.php" style="display:inline">
                        <input type="hidden" name="id" value="<?= $livro['id'] ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum livro cadastrado.</p>
    <?php endif; ?>

    <h2>Adicionar Livro</h2>
    <form method="post" action="add_book.php">
        <label>Título: <input type="text" name="titulo" required></label><br>
        <label>Autor: <input type="text" name="autor" required></label><br>
        <label>Ano: <input type="number" name="ano" required></label><br>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>
