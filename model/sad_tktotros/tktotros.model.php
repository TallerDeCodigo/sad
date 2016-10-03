<?php
	class TktOtros{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario,$FechaIni,$FechaFin,$NoTicket, $sql){
			$consulta = "SELECT * FROM sad_otros_zonas WHERE sad_usuarios_Id =  " . $IdUsuario. ";";
   			$sql->query($consulta);
   			foreach($sql->query($consulta) as $row) {
	       		$otros[] = $row;
	    	}// end foreach

	 		return json_encode($otros);
		}//end get function
	}//end class
?>