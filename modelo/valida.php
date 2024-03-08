<?php  
	/**
	 * 
	 */
	class valida
	{
		private $response = array();
		private $rutatemp = "temp/";
		public function __construct()
		{			
		}
		public function CreaRespuesta($codigo, $mensaje, $objeto){//$objeto = null y podemos meter mensaje sin igualar a vacio $mensaje = "",){
			switch ($codigo) {
				case '0':
					$this->response["codigo_respuesta"] = $codigo;//0; si no se pone este valor y se cambia la opcion seguira apareciendo cero
					$this->response["mensaje"] = $mensaje;
					$this->response["listaobjetos"] = $objeto;
					break;				
				case '-1':
					$this->response["codigo_respuesta"] = -1;
					$this->response["mensaje"] = $mensaje;
					break;
			}
		}

		public function ObtenerResponse(){
			//aqui devuelve la respuesta
			return $this->response;//no se retornaba nada, solamente estaba la indicacion
		}

		public function ExportarJson($nombreArchivo){			
			file_put_contents($this->rutatemp .$nombreArchivo, json_encode($this->response), FILE_APPEND | LOCK_EX);
		}
	}
?>