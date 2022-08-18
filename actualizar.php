<?php
//incluye la clase Persona y CrudPersona
	require_once('crud_persona.php');
	require_once('persona.php');
	$crud= new CrudPersona();
	$persona=new Persona();
	
	//busca la persona utilizando el id, que es enviado por GET desde la vista mostrar.php
	$persona=$crud->obtenerPersona($_GET['nombre']);
?>
<html>
<head>
	<title>Actualizar Persona</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/ddfc1db1ed.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
<center>
<a href="index.php"><img src="Zencabezado3.png" alt="error" style="width:45%" class="w3-hover-opacity"></a>
</center>
</header>

<body background=zbackground.jpg>

<form action='administrar_persona.php' method='post'>
	<table <table border="0" style="margin: 0 auto;">
		<tr>
		<div>
			<input type='hidden' name='nombre' value='<?php echo $persona->getid()?>'>
			<td id="dato" style="margin: 0 auto;">Fecha:</td>
			<td id="dato" style="margin: 0 auto;"> <input type='text' name='orden' value='<?php echo $persona->getorden()?>'></td>
        </div>
		</tr>
		<tr>
			<td id="dato">Cantidad:</td>
			<td id="dato"><input type='number' name='cantidad' value='<?php echo $persona->getcantidad()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>

	</table>
	<table border="0" style="margin: 0 auto;">
	<td id="guardarr"><input id="guardarr" input type='submit' value='Guardar'></td>
	<td id="volverr"><a href="index.php"><i class="fa-solid fa-house"></i></a></td>
	</table>

</form>

<div>
  <img src="zanuncio.gif" alt="error" style="width:100%">
</div>

</body>
</html>
