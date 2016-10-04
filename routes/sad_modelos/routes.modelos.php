<?php
	require_once('./model/sad_modelos/modelos.modelo.php');

	$app->get('/modelos/', function () use ($app, $sql) {
		
		//Model
		$model  = new ModelosModel();
		$result = $model->get($sql);
		return $result;

	});

	$app->get('/modelos/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});
?>