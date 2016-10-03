<?php
	require_once('./model/sad_graficas/graficas.model.php');

	$app->get('/graficas/', function () use ($app, $sql) {
		
		//Model
		$model  = new Graficas();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;

	});
?>