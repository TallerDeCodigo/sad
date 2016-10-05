<?php
	class unidadinm_respModel{
		/*GET*/
		function get($NoTicket, $Perfil, $sql){
			$where = "WHERE tkr.NoTicket = '" . $NoTicket . "'";
			if($Perfil == 2){				
				$where.= " AND (tkr.Perfil =3 or tkr.Perfil =2) ";
			}
			$consulta = "SELECT tkr.*, u.Nombre, u.ApePaterno, u.ApeMaterno FROM sad_tktunidadinm_resp AS tkr LEFT JOIN sad_usuarios AS u ON tkr.sad_usuariosId = u.Id $where ORDER BY tkr.FechaMod DESC ;";
			$query = $sql->query($consulta);

			foreach($query as $row){
				$unidadinm_resp[] = $row;
			}
			return json_encode($unidadinm_resp);
		}


		function ins(){

		}
	}
?>