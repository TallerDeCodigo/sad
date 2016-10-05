<?php
	require_once('./model/sad_cancelacionbo_partes/cancelacionbo_partes.model.php');

	$app->get('/cancelacionbo_partes/', function () use ($app, $sql) {	
		//Model
		$model  = new Cancelacionbo_partes();
		$result = $model->get($NoTicket = '', $sql ); // <--parametros que recibe
		
		return $result;
	});

	$app->get('/cancelacionbo_partes/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});

	/**
	 * INSERT INTO DATABASE 
	 **/
	$app->post('/cancelacionbo_partes/', function($request, $response, $args) use ($app, $sql){
		
		$json = $request->getBody();

    	$data = json_decode($json, true); 

    	$model= new DealersModel();

    	$model->insert($data, $sql);

    	return $model->insert($data);
	});

?>