<!--tabela excluir compras-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Compras</title>
</head>
<body>
    <h1>Excluir Compras</h1><br>

    <form action="/compras/delCompras" method="post">
        <label for="compra">Compra a ser excluída:</label>
        <input type="radio" id="compra" name="compra">
        <section>
                <option value="cozinha">Cozinha</option>
                <option value="wC">WC</option>
                <option value="lavanderia">lavanderia</option>
                <option value="geladeira">Geladeira</option>
                <option value="estante">Estante</option>
        </section>

        <label for="date">Data:</label>
        <input type="date" id="data" name="data">

        <button type="button" value="excluir">Excluir</button>
    </form>
</body>
    <a href="/posts/interface">Voltar</a>
</html>

