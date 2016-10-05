<?php
	class Tktinfotech{
		/*
			GET
		*/	
		function get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $Escalonado = 0, $sql){
			$con="SELECT tp.*, sa.Clave FROM sad_tktinfotech AS tp LEFT JOIN sad_agencias as sa ON sa.Id = tp.sad_agenciasId WHERE tp.Id<>0 $where $esca  ORDER BY Fecha DESC LIMIT 100";
			$query = $sql->query($con);

			foreach($query as $row){
				$tktinfotech[] = $row;
			}//end foreach
			return json_encode($tktinfotech);
		}//end get function

		/*POST*/
		function ins($sql){
			$consulta="INSERT INTO sad_tktinfotech(Fecha, NoTicket, EdMes, EdAnio, TipCatalogo, RazonConsulta, NoSerie, Modelo, Anio, CodColorExt, CodColorInt, CodParte, Seccion, NoParte, Descripcion, ColorParte, DesProblema, Fotografia,Fotografia2, Status, usuariosId, sad_agenciasId, Fechamod,txtNoPaRef) VALUES('" .$fReporte . "', '" . $datVO->NoTicket . "', '" . $datVO->EdMes . "','" . $datVO->EdAnio . "'," . $datVO->TipCatalogo. ",'" . $datVO->RazonConsulta. "','" . $datVO->NoSerie . "'," . $datVO->Modelo. "," . $datVO->Anio. ",'" . $datVO->CodColorExt . "','" . $datVO->CodColorInt . "',  '" . $datVO->CodParte . "','" . $datVO->Seccion . "','" . $datVO->NoParte . "','" . $datVO->Descripcion . "','" . $datVO->ColorParte . "','" . $datVO->DesProblema . "','" . $datVO->Fotografia . "','".$datVO->Fotografia2."','" . $datVO->Status. "','" . $datVO->usuariosId. "','" . $datVO->sad_agenciasId. "','" . date('Y-m-d H:i:s') . "','".$datVO->txtNoPaRef."');";
			$sql->query($consulta);
			return "ok";
		}

	}//end class 
?>