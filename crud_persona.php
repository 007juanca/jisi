<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudPersona{
		// constructor de la clase
		public function __construct(){}
		
		// método para insertar, recibe como parámetro un objeto de tipo persona
		public function insertar($persona){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO prueba values(:nombre,:orden,:cantidad)');
			$insert->bindValue('nombre',$persona->getid());
			$insert->bindValue('orden',$persona->getorden());
			$insert->bindValue('cantidad',$persona->getcantidad());
			$insert->execute();
 
		}
 
		// método para mostrar todas las personas
		public function mostrar(){
			$db=Db::conectar();
			$listaPersonas=[];
			$select=$db->query('SELECT * FROM prueba');
 
			foreach($select->fetchAll() as $persona){
				$myPersona= new Persona();
				$myPersona->setid($persona['nombre']);
				$myPersona->setorden($persona['orden']);
				$myPersona->setcantidad($persona['cantidad']);
				$listaPersonas[]=$myPersona;
			}
			return $listaPersonas;
		}
 
		// método para eliminar una persona, recibe como parámetro el id de la persona VERIFICAR SI NO FALEEEEEE AFGG
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM prueba WHERE nombre=:nombre');
			$eliminar->bindValue('nombre',$id);
			$eliminar->execute();
		}
 
		// método para buscar una persona, recibe como parámetro el id de la persona
		public function obtenerPersona($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM prueba WHERE nombre=:nombre');
			$select->bindValue('nombre',$id);
			$select->execute();
			$persona=$select->fetch();
			$myPersona= new persona();
			$myPersona->setid($persona['nombre']);
			$myPersona->setorden($persona['orden']);
			$myPersona->setcantidad($persona['cantidad']);
			return $myPersona;
		}
 
		// método para actualizar una persona, recibe como parámetro la persona
		public function actualizar($persona){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE prueba SET orden=:orden, cantidad=:cantidad  WHERE nombre=:nombre');
			$actualizar->bindValue('nombre',$persona->getid());
			$actualizar->bindValue('orden',$persona->getorden());
			$actualizar->bindValue('cantidad',$persona->getcantidad());
			$actualizar->execute();
		}
	}
?>