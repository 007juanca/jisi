<?php
//incluye la clase Persona y CrudPersona
require_once('crud_persona.php');
require_once('persona.php');
 
$crud= new CrudPersona();
$persona= new Persona();

	// si el elemento insertar no viene nulo llama al crud e inserta una persona
	if (isset($_POST['insertar'])) {
		$persona->setid($_POST['nombre']);
		$persona->setorden($_POST['orden']);
		$persona->setcantidad($_POST['cantidad']);
		
		//llama a la función insertar definida en el crud
		$crud->insertar($persona);
		header('Location: index.php');
	
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza la persona
	}elseif(isset($_POST['actualizar'])){
		$persona->setid($_POST['nombre']);
		$persona->setorden($_POST['orden']);
		$persona->setcantidad($_POST['cantidad']);
		$crud->actualizar($persona);
		header('Location: index.php');
	
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina una persona
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['nombre']);
		header('Location: index.php');		
		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>