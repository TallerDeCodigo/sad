<?php
	require_once('./model/sad_cancelacionbo_resp/cancelacionbo_resp.model.php');

	$app->get('/cancelacionbo_resp/', function () use ($app, $sql) {
		
		//Model
		$model  = new Cancelacionbo_resp();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;

	});
?>