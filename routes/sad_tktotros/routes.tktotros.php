<?php
	
	require_once('./model/sad_tktotros/tktotros.model.php');
	/*GET*/
	$app->get('/otros/', function () use ($app, $sql) {
		//Model
		$model  = new TktOtros();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario,$FechaIni,$FechaFin,$NoTicket, $sql);
		return $result;
	});

	$app->get('/otros/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});
	

