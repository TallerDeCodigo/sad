<?php
class SegPedido{
	/**
	 * get:
	 **/
	function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql){
		$consulta= "SELECT * FROM sad_seguimiento_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
   		$sql->query($consulta);
   		
   		foreach($sql->query($consulta) as $row) {
	         $segpedido[] = $row;
	    }//end foreach

	 	return json_encode($segpedido);
	}//end get function
}//end class