<?php
	
	require_once('./model/sad_tktsegpedido/tktsegpedido.model.php');

	/**
	 * GET ALL DEALERS
	 **/

	$app->get('/segpedido/', function () use ($app, $sql) {
		
		//Model
		$model  = new SegPedido();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql);
		return $result;

	});

	$app->get('/segpedido/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});

	/**
	 * INSERT INTO DATABASE 
	 **/

	$app->post('/segpedido/', function($request, $response, $args) use ($app, $sql){
		
		$json = $request->getBody();

    	$data = json_decode($json, true); 

    	$model  = new DealersModel();

    	$model->insert($data, $sql);

    	return $model->insert($data);
	});
	

	