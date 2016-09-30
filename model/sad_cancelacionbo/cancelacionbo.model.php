<?php 
	class Cancelacionbo{
		/*
			GET
		*/

		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$sql){

			if($IdDealer!=-1 || $IdDealer!=0 ){
				$where = " AND tp.sadagencias_Id = ".$IdDealer;
			}
			if($IdDealer == -1){
				$where = "";
			}
			if($Perfil == 3){
				$where = "";
				$consulta ="SELECT * FROM sad_backorder_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
				while($sql->query($cons)){
					$idAgencias.= $sql->sad_zona.", ";
				}
				$idAgencias.="0";
				$where = "AND sa.sad_zonaId IN (".$idAgencias.")";
			}
			if($Perfil ==4){
				$where = "AND sa.sad_zonaId IN (select sad_zonasId from sad_usuariosxzona where sad_usuariosId = ".$IdUsuario." )";
			}
			if($Perfil == 7){
				$where = "AND tp.Control = 1";
			}
			$dias = 5;
			if($Perfil == 2){
				$dias=30;
			}

			if($FechaIni != '' && $FechaFin != ''){
				if($escalo == "1"){
					$where.= " AND (tp.Status !=3 OR (tp.Status =3 AND DATE_SUB( CURDATE( ) , INTERVAL ".$dias." DAY ) <= tp.FechaMod))";
				}else{
					$where.= " AND tp.NoTicket ='".$NoTicket."'";
				}
			}

			if($Perfil==19)
				$where.= " AND tp.analistaInventarios=".$IdUsuario;
			if($Perfil==20)
				$where.= " AND  tp.jr_manager=".$IdUsuario;
			if($Perfil==5)
				$where.= " AND  tp.sr_manajer=".$IdUsuario;
			if($Perfil==6)
				$where.= "  AND tp.director=".$IdUsuario;
			if($Perfil==21)
				$where.= " AND  tp.directorGeneral=".$IdUsuario;
			
			if($subp==19)
				$where.= " AND tp.analistaInventarios>0";
			if($subp==20)
				$where.= " AND  tp.jr_manager>0";
			if($subp==5)
				$where.= " AND  tp.sr_manajer>0";
			if($subp==6)
				$where.= "  AND tp.director>0";
			if($subp==21)
				$where.= " AND   tp.directorGeneral>0";
				
			if($Perfil==9)
				$where.= "AND tp.infoTec<>0";
				
			if($Perfil=="24"){
				$dia = time()-(120*24*60*60); 
				$fechamin= date('Y-m-d', $dia); 
				$where.= " AND Fecha >='".$fechamin."' ";
			}

			$i=1;
			$cons="SELECT tp.*, sa.Clave FROM sad_cancelacionbo AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sadagencias_Id where tp.Id<>0 $where ORDER BY Fecha DESC;";
			
			//return $cons;
			$i = 1;

			foreach($sql->query($cons) as $row){
				$cancelacionbo[] = $row;
			}
			return json_encode($cancelacionbo);
		}//END GET

	}
?>