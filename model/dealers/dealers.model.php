<?php
class DealersModel
{
	/**
	 * 
	 * get:
	 *
	 **/

	function get($id = null, $sql)
	{

		if($id != null){
			$where = "Id = " .$id;
		}else{
			$where = "";
		}
		
		$consulta = 'SELECT a.*, z.Zona  FROM sad_agencias a left join sad_zonas z on a.sad_zonaId =z.Id ' . $where .' ORDER BY a.Clave ASC;';
   		
   		$sql->query($consulta);
   		
   		foreach($sql->query($consulta) as $row) {
   			$row['No'] = ++$i;
				if($row['Activo'] == 1){
					$row['Activo'] = 'Si';
				}else{
					$row['Activo'] = 'No';
				}

				if($row['Tipo'] == null){
					$row['Tipo'] = '';
				}else if($row['Tipo'] == 1){
					$row['Tipo'] = 'Matriz';
				}else if($row['Tipo']==2 ){
					$row['Tipo'] = 'Punto de venta';
				}else if($row['Tipo']==3){
					$row['Tipo'] = 'Sucursal';
				}
	         $dealers[] = $row;
	    }

	 	return json_encode($dealers);

	}

	/**
	 * 
	 * INSERT:
	 *
	 **/
	function insert($dealer, $sql){
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