<?php
class SegPedido{
	/**
	 * get:
	 **/
	function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql){

		if($id != null){
			$where = "Id = " .$id;
		}else{
			$where = "";
		}
		
		$consulta= "SELECT * FROM sad_seguimiento_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
   		
   		$sql->query($consulta);
   		
   		foreach($sql->query($consulta) as $row) {
	         $segpedido[] = $row;
	    }

	 	return json_encode($segpedido);

	}

	/**
	 * 
	 * INSERT:
	 *
	 **/
	

	function insert($dealer, $sql)
	{

		$consulta = "INSERT INTO sad_agencias (sad_zonaId, Nombre, Clave, Domicilio, Ciudad, Estado, Dealer, Compania, Activo, FechaMod, Tipo) VALUES('" . $dealer->sad_zonaId . "', '" . $dealer->Nombre . "', '" . $dealer->Clave . "', '" . $dealer->Domicilio . "', '" . $dealer->Ciudad . "', '" . $dealer->Estado . "', '" . $dealer->Dealer . "', '" . $dealer->Compania . "','" . $dealer->Activo . "', '" . date('Y-m-d') . "', '".$dealer->Tipo."')";
		
		$sql->query($consulta);

		return "ok";
	}

	/**
	 * 
	 * update:
	 *
	 **/
	

	function update($dealer)
	{

		return "ok";
	}
	
}