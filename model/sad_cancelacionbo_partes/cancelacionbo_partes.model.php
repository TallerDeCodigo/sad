<?php
	class Cancelacionbo_partes{
		/*
			GET
		*/
		function get($NoTicket, $sql){

			$consulta = "SELECT * FROM sad_cancelacionbo_partes WHERE NoTicket = '" . $NoTicket . "';";
			$sql->query($consulta);
 
			foreach($sql->query($consulta) as $row) {
				$cancelacionbo_partes[] = $row;
			}

			return json_encode($cancelacionbo_partes);
		}
	}
?>