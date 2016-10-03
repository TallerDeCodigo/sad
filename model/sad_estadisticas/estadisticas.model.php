<?php
	class Estadisticas{

		/*
			GET
		*/
		function get($fecha1,$fecha2,$perfil,$Id,$sql){

			if($perfil!="1"){
				$where2= " AND sad_agenciasId in (select Id from sad_agencias where sad_zonaId  in (select sad_zonasId from sad_usuariosxzona  where sad_usuariosId=".$Id.")) ";
				$where3= " AND sadagencias_Id in (select Id from sad_agencias where sad_zonaId  in (select sad_zonasId  from sad_usuariosxzona  where sad_usuariosId=".$Id.")) ";
			}
			$where="";
			$where=" WHERE Fecha >= '".$fecha1." 00:00:00'  AND Fecha <= '".$fecha2." 23:59:59' ";
			$consulta = "SELECT count(NoTicket) as nElemetos FROM sad_tktunidadinm $where $where2 AND sad_agenciasId != 217;";

			if($r1=mysql_fetch_object($consulta)){
				$ui = $r1->nElemetos;
			}
			$consulta1 = "SELECT count(NoTicket) as nElemetos FROM sad_tktbackorder $where $where2 AND sad_agenciasId != 217;";
			if($r2=mysql_fetch_object($consulta1)){
				$bo = $r2->nElemetos;
			}
			$consulta3="SELECT count(NoTicket) as nElemetos FROM sad_cancelacionbo $where  $where3 AND sadagencias_Id != 217;";
			if($r3=mysql_fetch_object($consulta2)){
				$ca = $r3->nElemetos;
			}
			$consulta4="SELECT count(NoTicket) as nElemetos FROM sad_cancelacionbo $where  $where3 AND sadagencias_Id != 217;";
			if($r4=mysql_fetch_object($consulta3)){
				$sp = $r4->nElemetos;
			}
			$consulta5= "SELECT count(NoTicket) as nElemetos FROM sad_tktinfotech $where $where2 AND sad_agenciasId != 217;";
			if($r6=mysql_fetch_object($consulta4)){
				$it = $r6->nElemetos;
			}
			$consulta6 = "SELECT count(NoTicket) as nElemetos FROM sad_tktprecios $where $where2 AND sad_agenciasId != 217;";
			if($r7=mysql_fetch_object($consulta5)){
				$crp = $r7->nElemetos;
			}
			$consulta7="SELECT count(Nuntkt) as nElemetos FROM sad_otrostks $where  $where2 AND sad_agenciasId != 217;";
			if($r8=mysql_fetch_object($consulta6)){
				$os = $r8->nElemetos;
			}
			

			$sql->query($consulta7);
   		
   			foreach($sql->query($consulta) as $row) {
	        	$estadisticas[] = $row;
	    	}

	 		return json_encode($estadisticas);
		}
	}
?>