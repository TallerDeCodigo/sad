<?php
	require_once('./model/sad_cancelacionbo/cancelacionbo.model.php');
	/**
	 * Get all cancelaciones bo
	 **/
	$app->get('/cancelacionbo/', function () use ($app, $sql) {	
		//Model
		$model  = new CancelacionboModel();
		$result = $model->get( $IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $sql ); // <--parametros que recibe
		
		return $result;
	});

	// $app->get('/cancelacionbo/:id', function ($id) use ($app, $sql)  {		
	// 	echo $id;
	// });

	/**
	 * INSERT INTO DATABASE 
	 **/
	$app->post('/cancelacionbo/', function($request , $response) use ($app, $sql){
		
		$json 	= $request->getParsedBody();
		$object = json_decode(json_encode($json), FALSE);

		print_r($object);
    	$model  = new AutomovilesModel();
     	$model->ins($object, $sql);

    	return $object;
	});