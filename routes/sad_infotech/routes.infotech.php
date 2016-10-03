<?php
	require_once('./model/sad_infotech/infotech.model.php');

	$app->get('/infotech/', function () use ($app, $sql) {
		
		//Model
		$model  = new Cancelacionbo_resp();
		$result = $model->get($IdAgencia, $IdUsuario, $sql);
		return $result;

	});
?>