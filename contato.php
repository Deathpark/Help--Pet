<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Contato | Help Pet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="fotos/icone/favicon.ico" type="image/x-icon">
    <link rel="icon" href="fotos/icone/favicon.ico" type="image/x-icon">
  </head>
  <body>
    <body background="fotos/patternbr.png" id="background">
    <header>
      <h1>  Help Pet</h1>
      <!--<?php
		    //if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
			 //      require("login.php");
		  //  } else{


        //if(isset($_SESSION["logado"]) || $_SESSION["logado"] == true){
    //  ?>
        <a href="logout.php">Log Out</a>
    //  <?php
      //  }
      //?>
		-->
    </header>
    <section id="barra-menu">
      <ul>
        <li><a href="index.php" >Home</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <!--<li><a href="feed.php" >Feed</a></li>
        <li><a href="perfil.php">Perfil</a></li>-->
        <li><a href="contato.php" class="atual">Contato</a></li>
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
    <section id="conteudo">
      <article>
        <section id="info">
          <h2>Telefone</h2>
          <p>(xx)xxxxx-xxxx</p>
          <h2>E-mail</h2>
          <p>pethelp@pethelp.com</p>
        </section>
        <section id="coment">
        <p>
          <label for="comentado"> Comentários <p></p></label>
              <textarea id="comentado" name="coment" rows="9" cols="69" placeholder="Digite aqui seu comentário."></textarea>
        </p>
            <input type="submit">
      </section>
      </article>
    </section>
    <footer>
      <p>Help Pet®</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
