<?php
	require_once('./model/sad_tktunidadinm/tktunidadinm.model.php');
	/**
	 * GET ALL unidadinm
	 **/
	
	$app->get('/unidadinm/', function () use ($app, $sql) {
		//Model
		$model  = new TktUnidadinm();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario=4602, $FechaIni = '', $FechaFin = '', $NoTicket = '', $subp, $escalo, $alertaDat, $faltaProv, $Especial=0, $TktPendientes=0, $TktOtrasAreas=0, $TktRevisados=0, $ListaVencidos=0, $ListaSinFecha=0, $ListaChasis=0,$sql);
		return $result;
	});
	
?>