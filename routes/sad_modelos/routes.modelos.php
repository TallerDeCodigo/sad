<?php
	require_once('./model/sad_modelos/modelos.modelo.php');

	$app->get('/modelos/', function () use ($app, $sql) {
		
		//Model
		$model  = new Cancelacionbo_resp();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;

	});
?>