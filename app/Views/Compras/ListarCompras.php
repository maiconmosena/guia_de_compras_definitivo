<!--tabela deve listar as compras do departamento,
    - usar metodo do listar ou listar produtos
    - fazer verificação-->

    <?php foreach ($compras as $compras) : ?>
        <h2><a href="/posts/interface <?= $compras->id ?>"><?= $compras->produto_id ?></a></h2>
        <p><?= $compras->produto?></p>
    <?php endforeach; ?>

    <a href="/posts/interface">Voltar</a>