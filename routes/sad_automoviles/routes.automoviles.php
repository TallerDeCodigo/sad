<?php
	
	require_once('./model/sad_automoviles/automoviles.model.php');

	/**
	 * GET ALL automoviles
	 **/


	$app->get('/automoviles/', function () use ($app, $sql) {
		
		//Model
		$model  = new AutomovilesModel();
		$result = $model->get(null, $sql);
		return $result;

	});

	$app->get('/automoviles/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new automovilesModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});

	/**
	 * INSERT INTO DATABASE 
	 **/

	$app->post('/automoviles/', function($request , $response) use ($app, $sql){
		
		$json 	= $request->getParsedBody();

		$object = json_decode(json_encode($json), FALSE);

		print_r($object);
    	$model  = new AutomovilesModel();
     	$model->ins($object, $sql);


    	return $object;
	});
	

