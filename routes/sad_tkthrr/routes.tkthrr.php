<?php
	require_once('./model/sad_tkthrr/tkthrr.model.php');

	$app->get('/tkthrr/', function () use ($app, $sql) {
		//Model
		$model  = new Hrr();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql);
		return $result;

		$app->get('/dealers/:id', function ($id) use ($app, $sql)  {		
			echo $id;
			 // $model  = new DealersModel();
			 // $result = $model->get($id, $sql);
			 // return $result;
		});

	});
?>