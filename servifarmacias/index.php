<?php
		$fh = fopen("php/imagenes.txt", "r");
		$validEntry = true;
	if(isset($_POST["submit"])){
		$handle = fopen("php/registroRifa.txt", "r+");
		$string = $_POST["folio"]." ".$_POST["monto"]." ".$_POST["correo"]." ".$_POST["telefono"]." ".$_POST["sucursal"];
		if($handle){
			while(($line = fgets($handle)) !== false){
				$segment = explode(" ", $line);
				if($segment[0] === $_POST["folio"] && $segment[1] === $_POST["monto"] && $segment[4] === $_POST["sucursal"]."\n"){
					$validEntry = false;
				}
				
			}
		}
		
		if($validEntry){
			fwrite($handle, $string."\n");
		}
		
	}	
	
	
	
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Servi-Farmacias</title>

	<?php
		if(isset($_POST["submit"])){
			echo "<script type=\"text/javascript\">
				window.onload = function() {
					document.getElementById(\"resultadoRifa\").scrollIntoView();
				};
			 </script>";
		}
		
	?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/micss.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    

<!--       HEADER     -->
<div class="jumbotron">
  <img class="headerlogo" src="files/logo-01.png">
  <img id="circulo" src="files/logo-circulo-01.png"/>
</div>


<!--       NAVBAR     -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand servi" href="#"><span class="servi">Servicio, Calidad y Precio</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active "><a href="#"><span class = "servi">Inicio</span> <span class="sr-only">(current)</span></a></li>
        <li><a href="nosotros.html"><span class="servi">Nosotros</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="servi">Servicios</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a  href="medicos.php">Médicos</a></li>
            <li><a href="laboratorio.html">Laboratorios</a></li>
          </ul>
        </li>
        <li class = "servi-menu" ><a href="sucursales.html"><span class="servi">Sucursales</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="bolsatrabajo.html"><span class="servi">Bolsa de trabajo</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!--      CONTENIDO     -->
      <div class="row">
        <div class="col-md-8 carousel">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img id="imagen1" class="imagenesCarousel" alt="">
                
              </div>
              <div class="item">
                <img id="imagen2" class="imagenesCarousel" alt="">
                
              </div>
              <div class="item">
                <img id="imagen3" class="imagenesCarousel" alt="">
               
              </div>
	      <div class="item">
                <img id="imagen4" class="imagenesCarousel" alt="">
               
              </div>
	      <div class="item">
                <img id="imagen5" class="imagenesCarousel" alt="">
               
              </div>
            </div>
	
	 

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
	    <div class="col-md-8">
            	<a id="soliciteF" href="factura.html">Solicite su factura electronica aquí</a>
	    </div>
	    <div class="col-md-1">
		<a href="factura.html"><img src="files/facturaicon.png" id="soliciteFicon"/></a>
	    </div>
          </div>
          <div class="row NoDisplay">
            <div id="facebook">

            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-default">
      </div>
      <div class="row">
        <div class="col-md-offset-1 col-md-7">
          <h1> Servi-Farmacias del Pacífico S.A. de C.V. </h1>
          <p><strong> Este es un parrafo para describir la farmacia.</strong> <br>
              Un parrafo introductorio donde se puede mencionar el slogan de la farmacia y darle una bienvenida al que visita la pagina.</p>

          <div class="divisor2"> </div>

          <h3 class="NoDisplay"> Noticias de la Comunidad </h3>
          <p class="NoDisplay"> Enterate de las noticias que suceden alrededor, lo que a nuestro alrededor. </p>
          <div class="NoDisplay" id="prox"></div>

          <div class="divisor2 NoDisplay"></div>
          <h3> Rifa de la Semana </h3>
          <p> ¿Será tu día de suerte? Registra tu ticket y juega tu suerte. Tal vez ganes el premio de la semana. </p>
           <div class="row">
		<div class="col-md-6">
			
			<img id="itemderifa"  />
		</div>
		<div class="col-md-6">
			<h1>Pon tus datos y participa en la rifa</h1>
			<form class="form-inline" id="rifaForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
				<div class="form-group">
					<label for="ticket">Folio del Ticket</label>
					<input name="folio" required type="text" class="form-control" id="ticket" placeholder="Numero de Ticket">
				</div>
				<div class="form-group">
					<label for="monto">Monto del Ticket</label>
					<input name="monto" required type="text" class="form-control" id="monto" placeholder="Monto del Ticket">
				</div>
				<div class="form-group">
					<label for="email">Correo Electronico</label>
					<input name="correo" required type="email" id="email" class="form-control" placeholder="correo electronico">
				</div>
				<div class="form-group">
					<label for="telefono">Telefono o Celular</label>
					<input name="telefono" type="text" required class="form-control" id="telefono" placeholder="numero de telefono o celular">
				</div>
        <div class="form-group">
          <label for="sucursal">Sucursal</label>
          <select name="sucursal" id="sucursal">
              <option value="villa">Villa Colonial</option>
              <option value="arcos">Arcos</option>
              <option value="huertos">Huertos</option>
              <option value="sanpedro">San Pedro</option>
              <option value="torres">Torres</option>
              <option value="villajuarez">Villa Juarez</option>
              <option value="santafe">Santa Fe</option>
              <option value="empaques">Empaques</option>
          </select>
        </div>
        <br>
				<button type="submit" name="submit" class="btn btn-default">Registrarse </button>
			</form>
			<p id="resultadoRifa"><?php
				if(isset($_POST["submit"])){
					if($validEntry){
						echo "Ya fue registrado en la rifa. Suerte!";
					} else{
						echo "El ticket que usted registro no es valido";
					}
			}
			?></p>
		</div>
	  </div>
          <div class="divisor2 NoDisplay"></div>
          <h3 class="NoDisplay"> Diviertete </h3>
          <p class="NoDisplay"> Entretenimiento por horas con este divertido juego, hecho por Servi-Farmacias </p>
	  <div class="NoDisplay" id="prox"></div>
          
          
        </div>
        <div class="col-md-4">

        </div>
      </div>
     <!--      FOOTER     -->
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
     <p class="navbar-text">Culiacan, Sinaloa, México © 2003 Servifarmacias Pacifico</p>
 <p class="navbar-text navbar-right"><a href="login.php" ><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></p>
     <p class="navbar-text navbar-right"><a href="http://192.168.5.1/farmasoft/login-form.php" ><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a></p>
     <p class="navbar-text navbar-right"><a href="https://host.hddtotal5.com:2096/" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></p>
      <p class="navbar-text navbar-right"><a href="avisolegal.html" class="navbar-link">Aviso de Privacidad</a></p>

  </div>
</nav>
   
	<?php
		$imagenes = fgets($fh);
		$lista_imagen = explode(",", $imagenes);
		echo "<script type=\"text/javascript\"> 
				var img1 = document.getElementById(\"imagen1\");

				img1.src = \"files/". $lista_imagen[0]."\";
				

				var img2 = document.getElementById(\"imagen2\");

				img2.src = \"files/".$lista_imagen[1]."\";

				
				var img3 = document.getElementById(\"imagen3\");
				img3.src = \"files/".$lista_imagen[2]."\";


				var img4 = document.getElementById(\"imagen4\");

				img4.src = \"files/".$lista_imagen[3]."\";


				var img5 = document.getElementById(\"imagen5\");
				img5.src = \"files/".$lista_imagen[4]."\";

				var img6 = document.getElementById(\"itemderifa\");
				img6.src = \"files/".$lista_imagen[5]."\";

				
				

			</script>";

	?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   
  </body>
</html>
<?php fclose($fh);
fclose($handle); ?>
