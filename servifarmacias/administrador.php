<?php

	//session
	session_start();

	//rifa
	$rifaHandle = fopen("php/registroRifa.txt", "r+");
	
	if(isset($_POST["borrar"])){
		rewind($rifaHandle);
		ftruncate($rifaHandle, 0);
	}
	//imagen
	$resultadoSubida = "";
	$imgHandle = fopen("php/imagenes.txt", "r+");
	$imagenes = fgets($imgHandle);
	$lista_imagen = explode(",", $imagenes); //array que guarda los nombres de las imagenes
	rewind($imgHandle);
	//info de la imagen para upload
	$target_dir = "files/";
	$target_file = $target_dir. basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
	
	if(isset($_POST["submit"])){
		$_SESSION["valid"] = true;
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
			
		} else {
			$uploadOk = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 40000000) {
		    $resultadoSubida = "La imagen esta muy pesada. ";
		    $uploadOk = 0;
		}
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		    $resultadoSubida =  "Solo se permite formato jpg, png, jpeg. ";
		    $uploadOk = 0;
		}
		if ($uploadOk == 0) {
		    $resultadoSubida .=  "No se subio su archivo.";
		// if everything is ok, try to upload file
		} else {
		   
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$resultadoSubida =  "La imagen ". basename( $_FILES["fileToUpload"]["name"]). " se subio.";
			$sameName = false;
			if($_POST["imagen"] === "1"){
				$delete = $lista_imagen[0];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[0] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if($_POST["imagen"] === "2"){
				$delete = $lista_imagen[1];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[1] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if($_POST["imagen"] === "3"){
				$delete = $lista_imagen[2];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[2] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if($_POST["imagen"] === "4"){
				$delete = $lista_imagen[3];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[3] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if($_POST["imagen"] === "5"){
				$delete = $lista_imagen[4];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[4] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if($_POST["imagen"] === "6"){
				$delete = $lista_imagen[5];
				if($delete === basename( $_FILES["fileToUpload"]["name"])){
					$sameName = true;
				}
				$lista_imagen[5] = basename( $_FILES["fileToUpload"]["name"]);
				$imagenes = implode(",", $lista_imagen);
				fwrite($imgHandle, $imagenes);
			}
			if(!$sameName){	unlink("files/".$delete); }
			rewind($imgHandle);
			$source_image = imagecreatefromjpeg($target_file);
			$src_w= imagesx($source_image);
			$src_h= imagesy($source_image);
			$dest_image = imagecreatetruecolor(800, 600); 

			imagecopyresampled($dest_image, $source_image, 0, 0, 0, 0, 800, 600, $source_w, $source_h);
			imagejpeg($dest_image,$target_file,80);
		    } else {
			$resultadoSubida =  "Hubo un error al subir el archivo, intentelo de nuevo.";
		    }
		    header("Location: administrador.php");
		}	
	}
	
	if(!$_SESSION["valid"]){
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrador</title>

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
	<div class="jumbotron">
	  <img class="headerlogo" src="files/logo-01.png">
	  <img id="circulo" src="files/logo-circulo-01.png"/>
	</div>
	<div>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Servi-Farmacias</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav role="tablist">
			<li role="presentation" class="active"><a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab">Inicio <span class="sr-only">(current)</span></a></li>
			<li role="presentation"><a href="#rifa" aria-controls="rifa" role="tab" data-toggle="tab">Rifa</a></li>
			<li role="presentation"><a href="#medico" aria-controls="medico" role="tab" data-toggle="tab">Medicos</a></li>
			<li><a href="login.php" onclick="<?php session_destroy();?>">Salir de sesion</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="inicio"><!-- Aqui se editan las fotos que estan en la pagina de inicio -->
				<h1> Imagenes que estan en la sesion de inicio: </h1>
				<h3> Haga click en la imagen que quiere cambiar <h3>
				<p> <?php echo $resultadoSubida; ?> </p>
				<div class="container-fluid"> 
					<div class="row">
						<div class="col-md-5">
							<img id="imagen1" class="imagenesCarousel"/>
						</div>
						<div class="col-md-4">
							<form class="form-inline" id="form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="1">
							    Seleccione imagen para cambiar:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
							   
							</form>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<img id="imagen2" class="imagenesCarousel"/>
						</div>
						<div class="col-md-5">
							<form class="form-inline" id="form2" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="2">
							    Seleccione imagen para cambiar:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
								
							</form>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<img id="imagen3" class="imagenesCarousel"/>
						</div>
						<div class="col-md-5">
							<form class="form-inline" id="form3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="3">
							    Seleccione imagen para cambiar:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
							</form>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-md-5">
							<img id="imagen4" class="imagenesCarousel"/>
						</div>
						<div class="col-md-4">
							<form class="form-inline" id="form4" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="4">
							    Seleccione imagen para cambiar:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
							</form>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<img id="imagen5" class="imagenesCarousel"/>
						</div>
						<div class="col-md-4">
							<form class="form-inline" id="form5" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="5">
							    Seleccione imagen para cambiar:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
							</form>
							
						</div>
					</div>
				</div>

			</div>
			

		    <div role="tabpanel" class="tab-pane fade" id="rifa">
			<div class="container-fluid">
				<div class="row">
					<h1> Ver los participantes </h1>
					<p id="integrantes">
					<?php
						$count = 0;
						while(($line = fgets($rifaHandle)) !== false){
							$segment = explode(" ", $line);
							echo "participante #".$count++.": folio = ".$segment[0].", monto = ".$segment[1].", correo = ".$segment[2].", telefono = ".$segment[3].", sucursal = ".$segment[4]."<br>";
										
						}

					?>
					</p>
				</div>
				<div class="row">
					<script src="js/ganador.js"></script>
					<h1> Escoger Ganador </h1>
					<div class="col-md-5">
						<form class="form-inline" id="form1" action="">
							<input type="button" onclick="escogerGanador();" value="ganador">
						</form>
					</div>
					<div class="col-md-7">
						<p id="ganador"></p>
					</div>
				</div>
				<div class="row">
					<h1> Borrar Participantes | <a href="php/registroRifa.txt" download>Descargar Archivo</a></h1>
					<div class="col-md-5">
						<form class="form-inline" id="form1" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
							<input type="submit" value="Borrar" name="borrar">
						</form>
					</div>
				
				</div>
				<div class="row">
						<div class="col-md-5">
							<img id="imagen6" class="imagenesCarousel"/>
						</div>
						<div class="col-md-4">
							<form class="form-inline" id="form6" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
							    <input type="hidden" name="imagen" value="6">
							    Seleccione imagen para la rifa:
							    <div class="form-group">
							    	<input type="file" name="fileToUpload" id="fileToUpload">
							    </div>
							    <input type="submit" value="Subir Imagen" name="submit">
							</form>
							
						</div>
					</div>
			</div>
		    </div>
		    <div role="tabpanel" class="tab-pane fade" id="medico">3</div>
		  </div>

	</div>





	<?php
				
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
				
						var img6 = document.getElementById(\"imagen6\");
						img6.src = \"files/".$lista_imagen[5]."\";
				
					</script>";

			?>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/showFormsAdmin.js"></script>
  </body>
</html>
<?php
	fclose($imgHandle);
	fclose($rifaHandle);
?>
