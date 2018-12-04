<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home | Help Pet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'visualization per Day'],
          ['Cachorro',     11],
          ['Gato',      9],
          ['Hamster',  5],
          ['Cavalo', 2],
          ['Galinha',    1]
        ]);

        var options = {
          title: 'Animais mais vistos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="fotos/icone/favicon.ico" type="image/x-icon">
    <link rel="icon" href="fotos/icone/favicon.ico" type="image/x-icon">
  </head>
  <body background="fotos/patternbr.png" id="background">
    <header>
      <h1>  Help Pet</h1>
			<!--
			<?php
		    //if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
			    //   require("login.php");
		    //} else{


        //if(isset($_SESSION["logado"]) || $_SESSION["logado"] == true){
      ?>
        <a href="logout.php">Log Out</a>
      <?php
      //  }
      //?>
		-->

    </header>
    <section id="barra-menu">
      <ul>
        <li><a href="index.php" class="atual">Home</a></li>
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

    <div id="slide" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slide" data-slide-to="0" class="active"></li>
        <li data-target="#slide" data-slide-to="1"></li>
        <li data-target="#slide" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="fotos/puggie.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Puggie Fofinho</h5>
            <p>Este puggie é fofo</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="fotos/macaco.png" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Macaco comendo</h5>
            <p>Este macaco é muito fofo</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="fotos/preguica800.png" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Preguiça mais fofa ainda</h5>
            <p>Este é um nível impecável de fofura</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <section id="adsesquerda">
      <!-- PROPAGANDA   -->
      <p>PROPAGANDA</p>
    </section>
    <section id="destaque">
      <!--<h2>Destaque</h2>-->
    </section>
    <section id="recentes">
      <h2>Recentes</h2>
      <p>

      </p>
    </section>
    <section id="piechart" style="width: 270px; height: 200px;"></section>
    <section id="mapa">
      <h2>Veterinários do Brasil</h2>
      <iframe src="https://www.google.com/maps/d/embed?mid=1rq1viZD2isCf6-L6Cz-Gsci0MyV_IhQl" width="640" height="480"></iframe>
    </section>
    <footer>
      <p>Help Pet®</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
