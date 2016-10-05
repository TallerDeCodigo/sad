<?php
	class UsuariosModel{
		/*GET*/
		function get($agencia, $perfil, $sql){
			$filtro = "";
			if($agencia == 0 && $perfil!=0){
				$consulta = "SELECT * FROM sad_usuarios WHERE Perfil = $perfil ORDER BY Nombre";
			}else if($agencia!=0){
				if($perfil!=0){
					$filtro = "AND U.Perfil=$perfil";
					$consulta="SELECT U.* FROM sad_usuariosxagencias UX LEFT JOIN sad_usuarios U ON UX.sad_usuariosId=U.Id LEFT JOIN sad_agencias A ON  UX.sad_agenciasId=A.ID WHERE A.Id=$agencia $filtro";
				}
			}else{
				$consulta="SELECT * FROM sad_usuarios  ORDER BY Nombre";
			}

			$query = $sql->query($consulta);

			foreach( $query as $row ){
				$usuarios[] = $row;

				if($row->Dealer!=0){
					$consulta="SELECT * FROM sad_agencias where Id=".$row->Dealer;
					$query2 = $sql->query($consulta);
					foreach($query2 as $row){
						$users[] = $row;
					}
				}	
			}
			//print_r($usuarios);
			return json_encode($usuarios);
		}
	}
?>