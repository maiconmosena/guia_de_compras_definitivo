<!--tabela excluir departamento-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Departamento</title>
</head>
<body>
    <h1>Excluir Departamento</h1><br>

    <form action="/departamento/excluirDep" method="post">
        <label for="departamento">Departamento a ser excluído:</label>
        <input type="text" id="departamento" name="departamento" required>
         <!--fazer verificação if/else-->

        <button type="button" value="excluir">Excluir</button>
    </form>
</body>
</html>

<a href="/posts/interface">Voltar</a>