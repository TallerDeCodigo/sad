<?php
	class TktUnidadinm{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $subp, $escalo, $alertaDat, $faltaProv, $Especial=0, $TktPendientes=0, $TktOtrasAreas=0, $TktRevisados=0, $ListaVencidos=0, $ListaSinFecha=0, $ListaChasis=0,$sql){
			$consulta = "SELECT * FROM sad_unidadinm_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
			$sql->query($consulta);

	   		foreach($sql->query($consulta) as $row) {
		         $tktUnidadinm[] = $row;
		    }

		 	return json_encode($tktUnidadinm);
		}
	}
?>