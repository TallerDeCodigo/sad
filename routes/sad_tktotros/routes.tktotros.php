<?php
	
	require_once('./model/sad_tktotros/tktotros.model.php');

	/**
	 * GET ALL DEALERS
	 **/


	$app->get('/tktotros/', function () use ($app, $sql) {
		
		//Model
		$model  = new TktOtros();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario,$FechaIni,$FechaFin,$NoTicket, $sql);
		return $result;

	});

	$app->get('/tktotros/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});

	/**
	 * INSERT INTO DATABASE 
	 **/

	$app->post('/otros/', function($request, $response, $args) use ($app, $sql){
		
		$json = $request->getBody();

    	$data = json_decode($json, true); 

    	$model  = new DealersModel();

    	$model->insert($data, $sql);

    	return $model->insert($data);
	});
	

