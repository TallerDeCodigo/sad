<?php
	class TktUnidadinm{
		/*
			GET
		*/
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $subp, $escalo, $alertaDat, $faltaProv, $Especial, $TktPendientes, $TktOtrasAreas, $TktRevisados, $ListaVencidos, $ListaSinFecha, $ListaChasis,$sql){
			if($IdDealer!=-1||$IdDealer!=0){
				//echo "dealer -1 o cero";
				$where = " AND tp.sad_agenciasId = " . $IdDealer;
			}
			if($IdDealer == -1){
				//echo "dealer menos uno";
				$where = "";
			}
			/*DAT*/
			if($Perfil==3){
				//echo "aqui- ";
				$where = "";
				$consulta = "SELECT * FROM sad_unidadinm_zonas WHERE sad_usuarios_Id = " . $IdUsuario. ";";
				$sql->query($consulta);

	   			foreach($sql->query($consulta) as $row) {
	   				//echo "foreach- ";
	   				$idAgencias.=$row['Zona'] . ", ";
		        	$tktUnidadinm[] = $row;
		    	}

		    	$idAgencias.="0";
		    	$con="SELECT * FROM sad_usuarios WHERE Id = ".$IdUsuario." AND Activo = 1 LIMIT 10;";
		    	//echo ($con);
		    	$sql->query($con);
		    	$subperfil = "";

		    	foreach($sql->query($con) as $row){
		    		$tktUnidadinm[] = $row;
		    		$subperfil = $tktUnidadinm['subPerfiles'];
		    		//print_r($tktUnidadinm);
		    		//echo $subperfil;	
		    	}
		    	if($subperfil=='llaves'){
		    		$where = " AND TipoTicket > 0 ";
		    		$tktUnidadinm[] = $row;
		    	}else{
		    		$where = " AND sa.Id IN (".$idAgencias.")";
		    		$tktUnidadinm[] = $row;
		    	}

		 		return json_encode($tktUnidadinm);

			}//END DAT

			/*FOM*/
			if($Perfil==4){
				$where = " AND tp.sad_agenciasId IN (select Id_agencia from sad_fomsxagencia where Id_usuario = ".$IdUsuario." )  ";
			}//end FOM

			/*CONTROL*/
			if($Perfil == 7){
				$where = " AND tp.Control = 1";
			}//end control
			$dias = 30;

			/*DISTRIBUIDOR 30 DIAS HISTORIAL DE TICKKET*/
			if($Perfil == 8){
				$consulta = "SELECT * FROM sad_usuarios WHERE Id=".$IdUsuario." AND Activo = 1;";
				print_r($consulta);
				$sql->query($consulta);
				$subperfil = "";
				foreach($sql->query($consulta) as $row){
					$dist_ticket[] = $row;
					$subperfil = $dist_ticket['subPerfiles'];
				}
				if($subperfil == "1-1"){
					$where.=" AND Status=20";
				}
				if($subperfil=="1-2"){
					$where.=" and Status=21";
				}
				if($subperfil == "1-3"){
					$where.=" and Status=22 ";
				}
				if($subperfil==2){
					$where.=" and (Status=20 or Status=21) ";
				}
			}// end distribuidor 30 dias

			/*FILTRO DE NO TICKET*/
			if($NoTicket!=''){
				$where.= " AND tp.NoTicket ='".$NoTicket."' ";
			}//end filtro de no ticket

			/* FILTRO FECHA INCIAL FINAL */	
			if($FechaIni != '' && $FechaFin != ''){
				if($escalo=="1")
					$where.= " AND FechaAnalistaInventarios >='$FechaIni 00:00:00' AND FechaAnalistaInventarios <='$FechaFin 23:59:29' ";
				else
					$where.= " AND (tp.Fecha >= '".$FechaIni."' AND tp.Fecha <= '".$FechaFin."')";
			}else{
				if($NoTicket==""){
					if($Perfil==19||$Perfil==20||$Perfil==21||$Perfil==5||$Perfil==6||$Perfil==28)//no mostar los resueltos a analistas
						$where.= " AND tp.Status !=3 ";
					else	
						$where.= " AND (tp.Status !=3 OR (tp.Status =3 AND DATE_SUB( CURDATE( ) , INTERVAL ".$dias." DAY ) <= tp.FechaMod))";
					}
				else
					$where.= " AND tp.NoTicket ='".$NoTicket."'";
			}//end ficltro fecha inicial final

			if($Perfil==19){
				$where.= " AND tp.analistaInventarios=".$IdUsuario." AND Status!=23";
			}

			if($Perfil==20){
				$where.= " AND  tp.jr_manager=".$IdUsuario." AND Status!=23  ";
			}

			if($Perfil==5){
				$where.= " AND  tp.sr_manajer=".$IdUsuario." AND Status!=23  ";
				}
			
			if($Perfil==6){
				$where.= "  AND tp.director=".$IdUsuario." AND Status!=23  ";
				}
			
			if($Perfil==21){
				$where.= " AND  tp.directorGeneral=".$IdUsuario."  AND Status!=23 ";
				}
			
			if($Perfil==26){
				$where.= " AND Status!=23 ";
				}

			$subPerfiles = 0;
			$consulta = "SELECT * FROM sad_usuarios WHERE Id=".$IdUsuario.";";
		
			foreach($sql->query($consulta) as $row){
				$respuesta[]=$row;
				$subPerfiles = $respuesta['subPerfiles'];
			}
			if($Perfil == 27){
				if($subPerfiles==1){
					$where.= " AND  tp.compras>=1  and Status=24";
				}
				if($subPerfiles==2){
					$where.= " AND  tp.compras>=2  and Status=24";
				}
				if($subPerfiles==3){
					$where.= " AND  tp.compras>=3  and Status=24";
					}
				if($subPerfiles==4){
					$where.= " AND  tp.compras>=4  and Status=24";
					}
				if($subPerfiles==5){
					$where.= "  AND  tp.compras>=5 and Status=24";
					}
			}//end if perfil 27

			if($Perfil == 28){
				$where.=" AND tp.analistaInventarios > 0";
				switch($subPerfiles){
					case 1:
						$where.= " AND tp.proveedor IN ( SELECT clave_prov FROM sad_escal_prov_planta WHERE Id_Analista =".$IdUsuario.")";
					break;
					case 2:
						$where.=  " AND tp.Proveedor in ( SELECT  clave_prov FROM sad_escal_prov_planta WHERE Id_jr_manager =".$IdUsuario.")";
					break;
					case 3:
						$where.=  " AND tp.Proveedor in ( SELECT  clave_prov FROM sad_escal_prov_planta WHERE Id_sr_manager =".$IdUsuario.")";
					break;
					case 4:
						$where.=  " AND tp.Proveedor in ( SELECT  clave_prov FROM sad_escal_prov_planta WHERE Id_Director =".$IdUsuario.")";
					break;
					case 5:
						$where.=  " AND tp.Proveedor in ( SELECT  clave_prov FROM sad_escal_prov_planta WHERE Id_DirGeneral =".$IdUsuario.")";
					break;
				}//END SWITCH
			}// END IF perfil 28

			if($subp==19){
				$where.= " AND tp.analistaInventarios>0";
			}
			if($subp==20){
				$where.= " AND  tp.jr_manager>0";
			}
			if($subp==5){
				$where.= " AND  tp.sr_manajer>0";
			}
			if($subp==6){
				$where.= "  AND tp.director>0";
			}
			if($subp==21){
				$where.= " AND   tp.directorGeneral>0";
			}
			if($Perfil==9){
				$where.= " AND tp.infoTec<>0 AND Status=23 ";
			}
			if($Perfil=="24"){
				$dia = time()-(120*24*60*60); 
				$fechamin= date('Y-m-d', $dia); 	
				$where.= " AND Fecha >='".$fechamin."' ";
			}
			if ($Perfil!=8&&$Perfil!=2&&$Perfil!=3 &&$Perfil!=1 &&$Perfil!=26 && $Perfil!=4){ // cuando este en almacen que no lo puedan ver, solo el dristribuidor
				$where.= " AND almacen = 0 ";
			}

			date_default_timezone_set("America/Mexico_City");
			$f = date("Y-m-d");

			if($escalo=="1"){
				$where.=" AND ( analistaInventarios <> 0 OR sr_manajer <> 0 OR director <>  OR directorGeneral <> 0 OR jr_manager <> 0 )";
				}
			if($alertaDat==true){
				$where.=" and (tp.Fecha1='".$f."' or tp.Fecha2='".$f."'  or tp.Fecha3='".$f."')  and tp.Status <> 3  ";
				}
			if($faltaProv==1){
				$where.=" and Proveedor='' and Fecha>'2012-12-03' ";
				}

			$i=1;

			$Pendientes = "";

			if($Perfil==3 OR $Perfil==1){

				if($TktPendientes == 1){
					$where.=" AND tpr.Fecha <  '" . date('Y-m-d') . "' AND (tp.Status = 2 OR tp.Status = 4) AND (tp.Fecha1 < '" . date('Y-m-d') . "' AND tp.Fecha2 < '" . date('Y-m-d') . "' AND tp.Fecha3 < '" . date('Y-m-d') . "') ";
					}
				if($TktOtrasAreas == 1){
					$where.=" AND tpr.Fecha =  '" . date('Y-m-d') . "' AND tpr.Perfil > 3 AND tp.Status > 3";
					}
				if($TktRevisados  == 1){
					$where.=" AND tpr.Fecha =  '" . date('Y-m-d') . "' AND tpr.Perfil = 3 AND (tp.Status = 2 OR tp.Status = 4)  ";
					}
				
				$Pendientes = " LEFT JOIN sad_tktunidadinm_resp AS tpr ON tpr.NoTicket = tp.NoTicket ";
			} //end if perfil 3 o 1


			/**
			*	Filtros Lista de Tickets Vencidos, Lista de Tickets Sin Fecha, Lista de Tickets Chasis
			*/
			if($Perfil==3 OR $Perfil==1){
				if($ListaVencidos == 1){
					$where.= " AND tp.PsolucionOtros < '" . date('Y-m-d') . "' AND tp.Status <> 3";
					}
				if($ListaSinFecha == 1){
					$where.= " AND (tp.Fecha1 = '0000-00-00' AND tp.Fecha2 = '0000-00-00' AND tp.Fecha3 = '0000-00-00') AND tp.Status <> 3 ";	
					}
				if($ListaChasis == 1){
					$where.= " AND ((NoParte REGEXP '^50100[A-Z0-9]') OR (NoParte REGEXP '^E0100[A-Z0-9]')) AND tp.Status <> 3 ";
					}
			}

			$consulta="SELECT tp.*, sa.Clave FROM sad_tktunidadinm AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sad_agenciasId $Pendientes WHERE tp.Id<>0 $where GROUP BY tp.NoTicket  ORDER BY Fecha DESC;";
			echo $consulta;
			//$sql->query($consulta);
			$modelP = array();
			$consulta = "SELECT * FROM sad_modelos;";

			foreach($sql->query($consulta) as $row){
				$modelP[$x->Id] = $x->Clave." ".$x->Descripcion;
				$modelE[$x->Id] = $x->Especial;
			}

			if(!$sql->query($consulta)){
				throw new Exception("Error Processing Request" . $cons, 1);
			}

			foreach($sql->query($consulta) as $row){
				$respuesta[] = $row; 

				if($Perfil == 2){
					//echo "aqui";
				}
			}
			return json_encode($respuesta);
		}//END FUNCTION GET
	}
?>