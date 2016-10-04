<?php
	class TktbackorderModel{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni='', $FechaFin='',$NoTicket='',$Hoy, $TktPendientes=0, $TktOtrasAreas=0, $Tktrevisados=0, $sql){

			$idAgencias = "";
			$where = " AND  tp.sad_agenciasId = " . $IdDealer;

			if($IdDealer == -1 || $Perfil==1){
				$where = "";
			}
			if($Perfil == 3 || $Perfil == 4){
				$where = "";
				$consulta = "SELECT * FROM sad_backorder_zonas WHERE sad_usuarios_Id =".$IdUsuario.";";
				while($consulta){
					$idAgencias.= $r->sad_zona . ", ";
				}//end while
				$idAgencias.="0";
				$where = " AND sa.Id IN (".$idAgencias.")";
			}//end if

			if($Perfil == 4){
				$where = " AND sa.Id IN (select sad_zonasId from sad_usuariosxzona where sad_usuariosId = ".$IdUsuario." )";
			}

			if($Perfil == 7){
				$where = " AND tp.Control = 1 ";
			}
			$dias=5;
			if($Perfil == 2){
				$dias = 30;
			}
			if($NoTicket !=''){
				$where.= " AND tp.NoTicket ='".$NoTicket."' ";
			}
			if($Hoy == 1){
				$h=date("Y-m-d");
				$where.=" AND (Fecha1='".$h."' or 	Fecha2='".$h."' or Fecha3='".$h."'	) ";
			}
			if($TktPendientes == 1){
				$where.=" AND tpr.Fecha <  '" . date('Y-m-d') . "' AND tp.Status > 3 OR tp.Status = 1 OR tp.Status = 2   ";
			}
			if($TktOtrasAreas == 1){
				$where.=" AND tpr.Fecha =  '" . date('Y-m-d') . "' AND tpr.Perfil > 3 ";
			}
			if($TktRevisados  == 1){
				$where.=" AND tpr.Fecha =  '" . date('Y-m-d') . "' AND tpr.Perfil = 3 AND tp.Status != 3 ";
			}
			if($FechaIni != '' && $FechaFin != ''){
				$where.= " AND (tp.Fecha >= '".$FechaIni."' AND tp.Fecha <= '".$FechaFin."')";
			}else{
				if($NoTicket == ''){
					$where.= "  AND ( tp.Status !=3 OR (tp.Status =3 AND DATE_SUB( CURDATE( ) , INTERVAL ".$dias." DAY ) <= tp.FechaMod))";
				}
			}
			if($Perfil == '24'){
				$dia = time()-(120*24*60*60); 
				$fechamin= date('Y-m-d', $dia); 
				$where.= " AND Fecha >='".$fechamin."' ";
			}

			$i = 1;
			$consulta = "SELECT tp.*, sa.Clave FROM sad_tktbackorder AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sad_agenciasId LEFT JOIN sad_tktbackorder_resp as tpr ON tpr.NoTicket = tp.NoTicket WHERE tp.Id<>0 $where GROUP BY tp.NoTicket ORDER BY Fecha DESC ;";
			//$sql->query($consulta);
		}
	}//ENDCLASS
?>