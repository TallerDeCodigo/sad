<?php
	class Hrr{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql){

			$consulta = "SELECT sad_agenciasId FROM sad_usuariosxagencias WHERE sad_usuariosId = " . $IdUsuario. ";";
			$sql->query($consulta);

			foreach($sql->query($consulta) as $row) {
	        	$tkthrr[] = $row;
	    	}

	 		return json_encode($tkthrr);
		}
	}
?>