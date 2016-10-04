<?php
	class TktUnidadinm{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$subp,$escalo,$alertaDat,$faltaProv, $sql){
			$consulta = "SELECT * FROM sad_unidadinm_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
			$sql->query($consulta);

	   		foreach($sql->query($consulta) as $row) {
		         $tktUnidadinm[] = $row;
		    }

		 	return json_encode($tktUnidadinm);
		}
	}
?>