<!--tabela de interface-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <!--direcionar as rotas -->
    
   <div id="inteface">
        <table id="tabela">
            <tr>
                <td class="ce"><a href="/compras/listarCompras" onclick="cozinha"></a>Cozinha</td>
                <td class="ce"><a href="/compras/listarCompras" onclick="WC"></a>WC</td>
                <td class="ce"><a href="/compras/listarCompras" onclick="lavanderia"></a>Lavaderia</td>
                <td class="cd"><a href="/produto/listar" onclick="listar"></a>Listar</td>
                <td class="ce"><a href="/compras/listarCompras" onclick="geladeira"></a>Geladeira</td>
                <td class="cd"><a href="/produto/comprar" onclick="comprar"></a>Comprar</td>
                <td class="ce"><a href="/compras/listarCompras" onclick="estante"></a>Estante</td>
            </tr>            
        </table>
   </div>
</body>
    <a href="/#">Sair</a>
</html>