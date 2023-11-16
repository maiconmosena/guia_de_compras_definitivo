<!--Listar produtos-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
</head>
    <body>
        
    <h1>Lista de produtos</h1><br>
    
        <table>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Departamento</th>
                <th>Valor</th>
                <th>Data_validade</th>
                <th>Data_compra</th>
            </tr>
  
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
 
            <?php endforeach ?>
        </table>
    </body>
        <a href="/posts/interface">Voltar</a>
        </html>



