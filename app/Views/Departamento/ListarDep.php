<!--listar de departamentos -->

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
      echo "Nome: " . $event->name;
      echo "<br>";
      echo "Local: " . $event->local;
      echo "<br>";
      echo "Data/Hora: " . timestamp2br($event->datetime);
      echo "<br>";
      echo "Descrição: " . $event->description;
      echo "<hr>";
  endforeach ?>
</body>
      <button type="submit"><a href="/#">Adicionar</a></button> <!--definir caminho por rota, excluir ou adicionar, ambos retorna para-->
      <button type="submit"><a href="/#">Excluir</a></button>
      <button type="submit"><a href="/#">Voltar</a></button> 
</html>

