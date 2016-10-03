<?php
	require_once('./model/sad_tktbackorder/tktbackorder.model.php');

	$app->get('/tktbackorder/', function () use ($app, $sql) {
		
		//Model
		$model  = new TktBackorder();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$HOY, $TktPendientes=0, $TktOtrasAreas=0, $TktRevisados=0, $sql);
		return $result;

	});
?>