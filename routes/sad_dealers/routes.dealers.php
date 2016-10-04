<?php
	require_once('./model/dealers/dealers.model.php');
	/**
	 * GET ALL DEALERS
	 **/
	$app->get('/dealers/', function () use ($app, $sql) {	
		//Model
		$model  = new DealersModel();
		$result = $model->get(null, $sql);
		return $result;
	});

	$app->get('/dealers/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});

	/**
	 * INSERT INTO DATABASE 
	 **/
	$app->post('/dealers/', function($request, $response, $args) use ($app, $sql){
		
		$json = $request->getBody();

    	$data = json_decode($json, true); 

    	$model  = new DealersModel();

    	$model->insert($data, $sql);

    	return $model->insert($data);
	});
	

	