<?php
	class TktbackorderModel{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$HOY, $TktPendientes=0, $TktOtrasAreas=0, $TktRevisados=0, $sql){
				$idAgencias = "";
				$where = " AND  tp.sad_agenciasId = " . $IdDealer;

				if($IdDealer == -1||$Perfil==1){
					$where = "";
				}
				if($Perfil == 3 || $Perfil == 4){
					$where = "";

					$consulta = "SELECT * FROM sad_backorder_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
					$sql->query($consulta);

					foreach($sql->query($consulta) as $row) {
	        			$tktBackorder[] = $row;
	    			}

	 				return json_encode($tktBackorder);

					$idAgencias.= "0";
					$where = " AND sa.Id IN (" . $idAgencias .")";	
				}

				if($Perfil == 4){
					$where = " AND sa.Id IN (select sad_zonasId from sad_usuariosxzona where sad_usuariosId = ".$IdUsuario." )";
				}
				if($Perfil == 7){
					$where = " AND tp.Control = 1 ";
				}

				$dias=5;
				if($Perfil == 2){
					$dias=30;
				}
					
				if($NoTicket != ''){
					$where.= " AND tp.NoTicket ='".$NoTicket."' ";
				}
				
				if($HOY==1){
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
						if($NoTicket==""){
							$where.= "  AND ( tp.Status !=3 OR (tp.Status =3 AND DATE_SUB( CURDATE( ) , INTERVAL ".$dias." DAY ) <= tp.FechaMod))";
						}
					}
					
					
				if($Perfil=="24"){
					
					$dia = time()-(120*24*60*60); 

					$fechamin= date('Y-m-d', $dia); 
					$where.= " AND Fecha >='".$fechamin."' ";
				}

				$i = 1;
				$con = "SELECT tp.*, sa.Clave FROM sad_tktbackorder AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sad_agenciasId LEFT JOIN sad_tktbackorder_resp as tpr ON tpr.NoTicket = tp.NoTicket  where tp.Id<>0 $where GROUP BY tp.NoTicket ORDER BY Fecha DESC ;";
				$sql->query($con);

				foreach($sql->query($con) as $row){
					$tktBackorder2[] = $row;

					if($vo->Status == 3){
						$vo->fCerrado = $row->FechaMod;
					}else{
						$vo->fCerrado = '';
					}

					if($Perfil==2){
						if($row->Status==1 || $row->Status==2 || $row->Status==3 || $row->Status==4)
							$vo->Status			= $row->Status;
						else{
							$vo->Status=2;
						}
						$vo->StatusDesc = "";	
					}else{

						$vo->Status	= $row->Status;
						$fecha=strtotime($row->PsolucionOtros); 
						$_mStatus = "";

						if($fecha==0){
							$_mStatus = "Sin Fecha";
						}else if($fecha<strtotime(date("Y-m-d"))){
							$_mStatus = "Fecha Vencida";
						}else if($fecha>=strtotime(date("Y-m-d"))){
							$_mStatus = "En Fecha";
						}
						if($row->Status == 3){
							$_mStatus = "Resuelto";	
						}
							$vo->StatusDesc = $_mStatus;
					}	

					$rBackOrder = $sql->query("SELECT Min(FechaMod) as PRespuesta FROM sad_tktbackorder_resp WHERE NoTicket = '" . trim($row->NoTicket) ."' AND Perfil = 3;");
					
					if($r = mysql_fetch_object($rBackOrder)){
						$vo->pRespuesta		= $r->PRespuesta;
					}
					$resultado[]= $vo;

				}
				return json_encode($tktBackorder2);
			}
		}//ENDCLASS
?>