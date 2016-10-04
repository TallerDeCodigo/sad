<?php
	class UnidadInmLlaves{
		/*GET*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $subp, $escalo, $alertaDat, $faltaProv, $sql){
			$consulta="SELECT * FROM sad_unidadinm_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
			$query = $sql->query($consulta);

			foreach($query as $row){
				$unidadinm_llaves[] = $row;
			}
			return json_encode($unidadinm_llaves);
		}
	}
?>