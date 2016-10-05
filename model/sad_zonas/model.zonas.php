<?php
	class ZonasModel{
		/*GET*/
		function get($activo, $sql){
			$where = "WHERE Activo = ".$activo;
			if($activo == -1){
				$where = "";
			}
			$consulta = "SELECT * FROM sad_zonas $where;";
			$query = $sql->query($consulta);

			foreach($query as $row){
				$zonas[] = $row;
			}
			return json_encode($zonas);
		}

		function ins($sql){
			$consulta = "INSERT INTO sad_zonas (Nombre, Zona, Activo, FechaMod) VALUES ('" . $datVO->Nombre . "', $datVO->Zona, 1, '" . date("") . "');";
			$sql->query($consulta);

			return "ok";
		}
		
	}
?>