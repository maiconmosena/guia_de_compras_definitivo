<!--tabela comprar produtos-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar produto</title>
</head>
<body>
    <h1>Comprar</h1>
    <!--o metodo calcular ira fazer o calculo do valor 
            ele ira direionar por conta ou precisa fazer?-->
    
    <form method="POST" action="#" oninput="calcular()">
        <label for="name">Nome do Produto:</label>
        <input type="text" name="name" id="name"><br>
    
        <label for="text">Categoria:</label>
        <input type="radio" name="text" id="text">
        <select name="categoria" id="categoria">
            <option value="limpeza">Limpeza</option>
            <option value="congelados">Congeados</option>
            <option value="horti-frutti">Horti-frutti</option>
            <option value="frios">Frios</option>
            <option value="estante">Estante</option>
            <option value="higiene">Higiene</option>
        </select><br>

        <label for="text">Departamento:</label>
        <input type="radio" name="departamento" id="departamento">
            <section>
                <option value="cozinha">Cozinha</option>
                <option value="wC">WC</option>
                <option value="lavanderia">lavanderia</option>
                <option value="geladeira">Geladeira</option>
                <option value="estante">Estante</option>
            </section><br>

        <label for="number">Valor:</label>
        <input type="number" name="valor" id="valor"><br>

        <label for="number">Quantidade:</label>
        <input type="number" name="number" id="number"><br>

        <label for="time">Data validade</label>
        <input type="datetime" name="date" id="date"><br>

        <label for="time">Data Compra:</label>
        <input type="datetime" name="date" id="date"><br>
        
        <button type="submit">Finalizar Compra</button>
        <!--fazer uma verificação para saber se deseja finalizar compra --> 
</body>

<a href="/#"></a> <!--direcionar caminho-->

</html>




