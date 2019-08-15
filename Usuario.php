<?php	

	class Usuario{

		private $nombreUsu;
		private $passwordUsu;
		private $estadoUsu;
		private $fechaVencimientoUsu;
		private $tipoUsu;

		public function __construct(){
				
		}

		public function getnombreUsu(){
			return $this->nombreUsu;
		}
		public function setnombreUsu($nombreUsu){
				$this->nombreUsu=$nombreUsu;
		}	


		public function getpasswordUsu(){
			return $this->passwordUsu;
		}
		public function setpasswordUsu($passwordUsu){
				$this->passwordUsu=$passwordUsu;
		}


		public function getestadoUsu(){
			return $this->estadoUsu;
		}
		public function setestadoUsu($estadoUsu){
				$this->estadoUsu=$estadoUsu;
		}


		public function getfechaVencimientoUsu(){
			return $this->fechaVencimientoUsu;
		}
		public function setfechaVencimientoUsu($fechaVencimientoUsu){
				$this->fechaVencimientoUsu=$fechaVencimientoUsu;
		}


		public function gettipoUsu(){
			return $this->tipoUsu;
		}
		public function settipoUsu($tipoUsu){
				$this->tipoUsu=$tipoUsu;
		}



	}

?>