<?php 
	class Cancelacionbo{
		/*
			GET
		*/

		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$sql){
			
			$consulta ="SELECT * FROM sad_backorder_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
			$sql->query($consulta);
			$i = 0;
			
			foreach($sql->query($consulta) as $row){

				$row['No'] = ++$i;
				if($row['Especial'] == 1)
					$row['Especial'] = 'Si';
				else
					$row['Especial'] = 'No';
				
				$automiviles[] = $row;
			}
			return json_encode($automiviles);
		}//END GET

		
		/*
			INSERT
		*/

		function ins($json, $sql){

			$consulta = "INSERT INTO sad_modelos(Clave, Descripcion, AnioDesde, AnioHasta, FechaMod, Especial)
							 VALUES ('".$json->Clave."','".$json->Descripcion."','".$json->AnioDesde."','".$json->AnioHasta."',NOW(),'" . $json->Especial . "')";
			
			// $sql->prepare($consulta);

			// $sql->execute();
			
			print($consulta);
			
			return "ok";
		}


		/*
			UPDATE
		*/
		function upd($datos, $sql){


		$consulta = "UPDATE sad_modelos SET Clave='".$datos->Clave."', Descripcion='".$datos->Descripcion."', AnioDesde='".$datos->AnioDesde.
								"', AnioHasta='".$datos->AnioHasta."', FechaMod='NOW()', Especial ='"  . $datos->Especial . "' WHERE Id=".$datos->Id;
								
		}

	}
?>