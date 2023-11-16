<!--tabela edição de produtos-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
    <body>

    <h1>Editar produto</h1>

        <form action="/produto/update" <?= $produto->id ?> method="post">
            <label for="name">Nome:</label>
            <input type="text" name="title" value="<?= $produto->nome ?>">

            <label for="departamento">Departamento:</label>
            <textarea name="departamento"><?= $produto->nome_dep ?></textarea>

        <button type="submit">Editar</button>
        
        </form>   
    </body>
        <a href="/posts/interface">Voltar</a>
</html>