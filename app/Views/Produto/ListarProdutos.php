<!--Lista de produtos por departamento-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>
    <h1>Listar por Departamento</h1><br>

    <form action="/#" method="get">
        <label for="nome_departamento">Nome Departamento:</label>
        <input type="radio" id="nome_departamento" name="nome_departamento">

        <table>
            <?php foreach ($produtos as $produto) :?>  
        <tr>
            <td><?= $produto->nome ?></td>  
            <td><?= $produto->departamento ?></td>
            <td><?= $produto->tipo ?></td>
            <td><?= $produto->quantidade ?></td>
            <td><?= $produto->valor ?></td>
            <td><?= $produto->data_validade ?></td>
            <td><?= $produto->data_compra ?></td>
            <td><?= $produto->descricao ?></td>
        </tr>

            <button type="submit">Listar</button>  

            <?php endforeach ?>    
        </table>
    </form>
</body>
    <a href="/#"></a>
</html>
    

