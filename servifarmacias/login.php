<?php
	$username = "servifar";
	$password = "Admin2015";
	
	if(isset($_POST["submit"])){
		echo "something";
		if($_POST["Usuario"] === $username && $_POST["password"] === $password){
			session_start();
			$_SESSION["valid"] = true;
			header("Location: administrador.php");
		}else{
			$msgValido = "usuario o contraseña invalido";
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
        <li><a href="index.php"><span class ="servi">Inicio</span> </a></li>
        <li><a href="nosotros.html"><span class="servi">Nosotros</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="servi">Servicios</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a  href="medicos.php">Médicos</a></li>
            <li><a href="laboratorio.html">Laboratorios</a></li>
          </ul>
        </li>
        <li class ="servi-menu" ><a href="sucursales.html"><span class="servi">Sucursales</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="bolsatrabajo.html"><span class="servi">Bolsa de trabajo</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!--      CONTENIDO     -->
      <div class="row">
      	<div class="col-md-5 col-md-offset-1">
      		<h1>Quiere entrar como administrador?</h1>
      		
      		
      		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            
              <div class="form-group">
                <label for="Usuario">Usuario </label>
                <input type="text" name="Usuario" id="Usuario"/>
              </div>
		 <div class="form-group">
                <label for="password">Contraseña </label>
                <input type="password" name="password" id="password"/>
              </div>
              
              <button type="submit" name="submit" class="btn btn-default">Enviar</button>
	      <p><?php echo $msgValido; ?></p>
          </form>
      	</div>
      </div>
    
    <!--      FOOTER     -->
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
     <p class="navbar-text">Culiacan, Sinaloa, México © 2003 Servifarmacias Pacifico</p>
     <p class="navbar-text navbar-right"><a href="http://192.168.5.1/farmasoft/login-form.php" ><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></a></p>
     <p class="navbar-text navbar-right"><a href="https://host.hddtotal5.com:2096/" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></p>
      <p class="navbar-text navbar-right"><a href="avisolegal.html" class="navbar-link">Aviso de Privacidad</a></p>

  </div>
</nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
