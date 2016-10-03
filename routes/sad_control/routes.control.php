<?php
	require_once('./model/sad_control/control.model.php');

	$app->get('/control/', function () use ($app, $sql) {
		
		//Model
		$model  = new Control();
		$result = $model->get($sql);
		return $result;

	});
?>