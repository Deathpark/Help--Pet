<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Help Pet</title>
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
		  </header>

			<section id="barra-menu">
	      <ul>
	        <li><a href="index.php" >Home</a></li>
	        <li><a href="sobre.php">Sobre</a></li>
	       <!-- <li><a href="feed.php">Feed</a></li>
	        <li><a href="perfil.php">Perfil</a></li>-->
	        <li><a href="contato.php">Contato</a></li>
					<li><a href="paglogin.php" class="atual">Login</a></li>
	      </ul>
	    </section>

	    <section id="adsdireita">
	      <!-- PROPAGANDA   -->
	      <p>PROPAGANDA</p>
	    </section>

			<?php
			if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
				require("login.php");
			}else{
				header("location: conected/homec.php");
			}
			?>

			<section id="adsesquerda">
	      <!-- PROPAGANDA   -->
	      <p>PROPAGANDA</p>
	    </section>
  </body>
</html>
