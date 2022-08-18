<!DOCTYPE html>
<html>
<head>
	<title>Reservación</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/ddfc1db1ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body background=zbackground.jpg>

<header>
<center>
  <img src="Zencabezado.png" alt="error de carga" style="width:45%" class="w3-hover-opacity" style="margin: 0 auto;">
</center>

<h1>Tu Orden</h1>
</header>


<form action='administrar_persona.php' method='post'>
	<table  border="0" style="margin: 0 auto;">
		<tr>
		<td id="dato">Nombre</td>
			<td> <input type='text' name='nombre'></td>
		</tr>

		<tr>
		<td id= "dato">Orden</td>
			<td> <input type='text' name='orden'></td>
		</tr>
		<tr>
		<td id= "dato">Cantidad</td>
			<td><input type='number' name='cantidad' ></td>
		</tr>
		
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<table  border="0" style="margin: 0 auto;">
	<td id="guardarr" class="w3-hover-opacity"> <input id="guardar2" type='submit'; value='Confirmar'></td>
	<td id="volverr" class="w3-hover-opacity"><a href="index.php"><i class="fa-solid fa-house"></i></a></td>
	</table>
</form>
<br>
<br>

<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
   <img src="zhamburguesacompleta.jpg" alt="error de carga" style="width:100%" class="w3-hover-opacity">
      
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
    <img src="zjuancarlos.jpg" alt="error de carga" style="width:100%" class="w3-hover-opacity">
      
    </div>
    <div class="w3-third w3-container">
   <img src="zpizzacompleta.jpg" alt="error de carga" style="width:100%" class="w3-hover-opacity">
    </div>
</div>

<div>
  <img src="zanuncio.gif" alt="error" style="width:100%">
<br></br>
</div>

</body>
</html>