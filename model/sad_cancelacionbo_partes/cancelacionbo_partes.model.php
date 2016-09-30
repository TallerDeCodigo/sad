<?php
	class Cancelacionbo_partes{
		/*
			GET
		*/
		function get($NoTicket){
			$sql = new MySQLNissan();
			$consulta = "SELECT * FROM sad_cancelacionbo_partes WHERE NoTicket = '" . $NoTicket . "';"

			$sql->query($consulta);

			foreach($sql->query($consulta)){
				$cancelacionesbo_partes[] = $row;
			}
			return json_encode($cancelacionesbo_partes);
		}
	}//END GET
?>