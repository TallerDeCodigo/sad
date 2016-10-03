<?php
	class Tktinfotech{
		/*
			GET
		*/	
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $Escalonado = 0, $sql){
			$con="SELECT tp.*, sa.Clave FROM sad_tktinfotech AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sad_agenciasId WHERE tp.Id<>0 $where $esca  ORDER BY Fecha DESC LIMIT 100";
			$query = $sql->query($con);

			foreach($query as $row){
				$tktinfotech[] = $row;
			}//end foreach
			return json_encode($tktinfotech);
		}//end get function

	}//end class 
?>