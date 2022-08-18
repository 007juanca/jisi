<?php 

class Persona{
		private $id;
		private $orden;
		private $cantidad;
		function __construct(){}

		public function getid(){
			return $this->nombre;
		}
 
		public function setid($id){
			$this->nombre = $id;
		}
 
		public function getorden(){
		return $this->orden;
		}
 
		public function setorden($orden){
			$this->orden = $orden;
		}
 
		public function getcantidad(){
			return $this->cantidad;
		}
 
		public function setcantidad($cantidad){
			$this->cantidad = $cantidad;
		}
 
		
		
	}

 ?>