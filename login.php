<?php
  require_once("modelo.php");
  if($_POST){

    $usuario = Usuario::obtemUsuarioPorNome($dblink, $_POST["email"]);

    if($usuario != null && $usuario->checar_senha($_POST["senha"])){
      $_SESSION["logado"] = true;
      $_SESSION["id_usuario"] = $usuario->getIdUsuario();

      header("location: conected/homec.php");
    }else{
      echo("<div class='erro'>Erro! Usuário ou senha inválidos!</div>");
    }
  }
?>
<section >
  <form method="post" style="position:absolute;left:43%;">
    <label for="usuario"> E-mail:</label>
      <input type="text" name="email" class="form-control" aria-describedby="basic-addon1" size="20" id="usuario">
    <label for="senha"> Senha:</label>
      <input type="password" name ="senha" class="form-control" aria-describedby="basic-addon1" size="20" id="senha">
  <a href="cadastro.php">Cadastrar</a>
      <input type="submit" value="logar">
  <!--<button id="login">Login</button>-->
</section>
