<?php 
	require_once('./model/sad_estadisticas/estadisticas.model.php');

	$app->get('/estadisticas/', function () use ($app, $sql) {
		
		//Model
		$model  = new Estadisticas();
		$result = $model->get($fecha1,$fecha2,$perfil,$Id,$sql);
		return $result;

	});
?>