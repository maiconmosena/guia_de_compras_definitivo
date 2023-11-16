<!--Formulario cadastro de departamentos-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Departamento</title>
</head>
<body>
        <h1>Adicionar Departamento</h1><br>
    
    <form action="/departamento/adicionarDep" method="post">
        <label for="name">Nome do Departamento:</label>
        <input type="text" id="name" name="name"><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea><br>
        <!--fazer verificação if/else-->

        <button type="submit" value="adicionar">Adicionar</button>
    </form>
</body>
</html>

<a href="/posts/interface">Voltar</a>