<!Doctype html>
	<html lang="es">
<head>
		
	<meta charset="UTF-8"/>

	<link rel="stylesheet" type="text/css" href="styles.css">

  	<script type="text/javascript" src="query.js"></script>
  	<!-- Versión compilada y comprimida del CSS de Bootstrap -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="query.js"></script>

	<title>landing</title>

</head>

<body>

<div class="contenedor">

	<!--- inicio header -->

		<div class="col-md-12 header">

			<div class="col-md-4 logo">
				<img src="images/logo.png">

			</div>

		</div>


	<!--- Fin header -->



	<!--- inicio contenido -->


		<div class="col-md-12 contenido">

			<div class="col-md-12 texto">

			<p class="big-words">PDF's Informativos Unicatalunya</p>

				<p class="small-words">Introduzca el codigo del PDF a descargar deseado</p>

			</div>



	<!--- inicio formulario de búsqueda -->



		<form class="form-inline" role="form">
  			
  			<div class="form-group">
    			
   					<input type="text" class="form-control" id="codigo-pdf" placeholder="Introduce tu codigo de PDF">


   					<button type="button" class="btn btn-primary btn-lg">Buscar PDF</button>

 			 </div>

 		</form>

	<!--- fin formulario de búsqueda -->



	<!--- inicio olvido contraseña -->

		<div class="col-md-12 form-inline" id="olvido-codigo">

			<div class="texto-olvido">

				<p>¿Olvido o perdio su código?</p>

			</div>


			<form class="codigo" role="form">
		  			
		  			<div class="form-group">
		    			

		   					<input type="text" class="form-control" id="olvido-codigo" placeholder="Introduce tu correo con el que realizaste el curso">


		   					<button type="button" id="olvido" class="btn btn-primary btn-lg">Enviar código</button>


		 			</div>

		 	</form>


		</div>

	<!--- fin olvido contraseña -->

		</div>


	<!--- fin contenido -->



	<!--- inicio footer -->

		<div class="col-md-12 footer">
		

		</div>

	<!--- final footer -->

</div>



</body>
