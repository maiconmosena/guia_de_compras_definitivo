  <!--tratamento de erros-->
  
  <?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif;?>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif;?>

  <!--formulário de login do usuário-->

<form action="/home/altenticar" method="post" target="_self">
  <label>Nome:</label><br>
  <input type="text" id="senha" name="senha" value="..." required ><br>
  <label>Senha:</label><br>
  <input type="password" id="password" name="password" value="..." required ><br>  
  
  <input type="submit" value="Login">
</form> 

<a href="/interface">Login</a>