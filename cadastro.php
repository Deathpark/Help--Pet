<?php
  require_once("modelo.php");
  if($_POST){
    $usuario = new Usuario($_POST);
    $usuario->inserir($dblink);
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Help Pet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="fotos/icone/favicon.ico" type="image/x-icon">
  </head>
  <body background="fotos/patternbr.png" id="background">
    <header>
      <h1>  Help Pet</h1>
    </header>
    <section id="barra-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <!--<li><a href="feed.php">Feed</a></li>
        <li><a href="perfil.php">Perfil</a></li>-->
        <li><a href="contato.php">Contato</a></li>
        <li><a href="paglogin.php">Login</a></li>
      </ul>
    </section>
    <section id="adsdireita">
      <!-- PROPAGANDA   -->
      <p>PROPAGANDA</p>
    </section>
    <section id="adsesquerda">
      <!-- PROPAGANDA   -->
      <p>PROPAGANDA</p>
    </section>
    <section class="cadastro">
      <h1 id="tituloSobre">Cadastro</h1>

      <label> E-mail:</br>
        <input id="campoemail" type="email" class="form-control" placeholder="Ex: helppet@helppet.com" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Senha:</br>
        <input id="camposenha" type="password" class="form-control" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Nome:</br>
        <input id="camponome" type="text" class="form-control" placeholder="Ex: José " aria-label="Username" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Sobrenome:</br>
        <input id="camposobrenome" type="text" class="form-control" placeholder="Ex: Carvalho Lima" aria-label="Username" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Idade:</br>
        <input id="campoidade" type="number" class="form-control" placeholder="Ex: 22" aria-describedby="basic-addon1" size="11"><p></p>
      </label><p></p>

      <label> Sexo: </br>
        <input type="radio" name="gender" value="M"> Masculino<br>
        <input type="radio" name="gender" value="F"> Feminino<br>
      </label><p></p>

      <label> Telefone:</br>
        <input id="campotel" type="tel" class="form-control" placeholder="Ex: (31)99999-9999" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Região:</br>
        <input id="camporegiao" type="text" class="form-control" placeholder="Ex: Barreiro" aria-describedby="basic-addon1" size="30"><p></p>
      </label><p></p>

      <label> Descrição:</br>
        <input id="campodescricao" type="text" class="form-control" placeholder="Ex: Sou muito alto e amo animais!" aria-describedby="basic-addon1" size="300"><p></p>
      </label><p></p>

      <label> Escolha uma foto: </br></label>
      <label class="custom-file-label" for="inputGroupFile01">
        <input type="file" class="custom-file-input" id="inputGroupFile01" size="30">
      </label>

      <button type="submit" id="receberDados">Cadastrar</button>

    </section>
    <footer>
      <p>Help Pet®</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
