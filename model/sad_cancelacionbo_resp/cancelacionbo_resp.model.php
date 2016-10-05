<?php
	class Cancelacionbo_resp{
		/*GET*/
		function get($NoTicket, $Perfil, $sql){
			$consulta = "SELECT * FROM sad_cancelacionbo_resp WHERE Perfil = 7 AND NoTicket = '" . $datVO->NoTicket . "';";
			$sql->query($consulta);
   		
   			foreach($sql->query($consulta) as $row) {
	        	$dealers[] = $row;
	    	}

	 		return json_encode($dealers);
		}
		
		/*INSERT*/
		function ins($datVO, $Perfil, $sql){
			if($datVO < 7){
				$consulta = "INSERT INTO sad_cancelacionbo_resp(Fecha, NoTicket, sad_usuariosId, PSolucion, Comentario, FechaSolucion, DiasSolucion, Perfil, Status, FechaMod) VALUES('" . date('Y-m-d') . "', '" . $datVO->NoTicket . "', " . $datVO->sad_usuariosId . ", '" . $datVO->PSolucion . "', '" . $datVO->Comentario . "', '" . $datVO->FechaSolucion . "', " . $datVO->DiasSolucion . ", " . $datVO->Perfil . ", '" . $datVO->Status . "', '" . date('Y-m-d H:i:s') . "');";
				$sql->query($consulta);
			}
			return "ok";
		}
	}
?>