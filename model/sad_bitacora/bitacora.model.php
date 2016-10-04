<?php
	class BitacoraModel{
		/*GET*/
		function get($modulo, $ticket, $sql){
			$modulo = (int)$modulo;
			$Amodulo=array("","sad_tktunidadinm_bita","sad_tktbackorder_bita","sad_cancelacionbo_bita","sad_tktsegpedido_bita","sad_tktinfotech_bita","sad_tktprecios_bita","sad_otrostks_bita");
			$consulta = "SELECT * FROM " . $Amodulo[$modulo]. " ORDER BY Fecha DESC";

			foreach( $sql->query($consulta) as $row ){
				$bitacora[] = $row;
			}
			return json_encode($bitacora);
		}// END get function

		function ins($json, $sql){
			$consulta=" INSERT INTO ".$Amodulo[$modulo]." (Comentarios,NoTicket) VALUES ('".$json->Comentario."','".$json->ticket."') ;";
			print($consulta);
			return "ok";
		}

	}//end class
?>