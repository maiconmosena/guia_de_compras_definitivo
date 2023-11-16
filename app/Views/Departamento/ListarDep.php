<!--lista de departamentos -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Departamentos Cadastrados</title>
</head>
<body>
    <h1>Departamentos Cadastrados</h1>

    <?php
    foreach ($departamento as $departamento) :
      echo "Nome: " . $nome_dep->name;
      echo "<br>";
      echo "Descricao: " . $descricao->descricao;
      echo "<br>";
    endforeach ?>
</body>
      <button type="submit"><a href="/departamento/adicionarDep">Adicionar</a></button>
      <button type="submit"><a href="/departamento/excluirDep">Excluir</a></button>
      <button type="submit"><a href="/posts/interface">Voltar</a></button> 
</html>

