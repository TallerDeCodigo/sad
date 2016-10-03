<?php
	class Cancelacionbo_resp{
		/*
			GET
		*/
		function get($NoTicket, $Perfil, $sql){
			$consulta = "SELECT * FROM sad_cancelacionbo_resp WHERE Perfil = 7 AND NoTicket = '" . $datVO->NoTicket . "';";
			$sql->query($consulta);
   		
   			foreach($sql->query($consulta) as $row) {
	        	$dealers[] = $row;
	    	}

	 		return json_encode($dealers);
		}
	}
?>