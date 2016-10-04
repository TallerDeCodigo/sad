<?php
	require_once('./model/sad_tktbackorder/tktbackorder.model.php');

	$app->get('/backorder/', function () use ($app, $sql) {
		
		//Model
		$model  = new TktbackorderModel();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni='', $FechaFin='',$NoTicket='',$Hoy, $TktPendientes=0, $TktOtrasAreas=0, $Tktrevisados=0, $sql);
		return $result;

	});
?>