<?php
//incluye la clase Persona y CrudPersona
require_once('crud_persona.php');
require_once('persona.php');
$crud=new CrudPersona();
$persona= new Persona();

//obtiene todas las perosnas con el método mostrar de la clase crud
$listaPersonas=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Personas</title>
	<script src="https://kit.fontawesome.com/ddfc1db1ed.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<header>
<center>
<a href="index.php"><img src="Zencabezado2.png" alt="error de carga" style="width:45%" class="w3-hover-opacity"></a>
</center>
<h1>Ordenes</h1>
<h2>presione el isologo para volver al menú</h2>
</header>
<body background=zbackground.jpg>

	<table border="1" style="margin: 0 auto;">
		<head>
			<td id="cabezatabla">Nombre</td>
			<td id="cabezatabla">Orden</td>
			<td id="cabezatabla">Cantidad</td>
			<td id="cabezatabla">Cambiar</td>
			<td id="cabezatabla">Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaPersonas as $persona) {?>
			<tr>
				<td><?php echo $persona->getid() ?></td>
				<td><?php echo $persona->getorden() ?></td>
				<td><?php echo $persona->getcantidad()?> </td>
				<td><a href="actualizar.php?nombre=<?php echo $persona->getid()?>&accion=a"><i class="fa-solid fa-pen-to-square"></i></a> </td>
				<td><a href="administrar_persona.php?nombre=<?php echo $persona->getid()?>&accion=e"> <i class="fa-solid fa-trash-can"></i></a>   </td>
			</tr>
			<?php }?>
</body>
</html>