<!--tabela listar as compras do departamento
    - usar metodo do listar
    - fazer verificação-->

<?php foreach ($compras as $compras) : ?>
    <h2><a href="/# <?= $compras->id ?>"><?= $compras->produto_id ?></a></h2>
    <p><?= $compras->produto?></p>
    <?php endforeach; ?>