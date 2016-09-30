<?php
	
	require_once('./model/sad_bitacora/bitacora.model.php');

	/**\
	 * GET ALL bitacoras
	\**/


	$app->get('/bitacora/', function () use ($app, $sql) {
		
		//Model
		$model  = new BitacoraModel();
		$result = $model->get(1, null, $sql);
		return $result;

	});

	$app->get('/bitacora/:id', function ($id) use ($app, $sql)  {		

		echo $id;


	});

	/**
	 * INSERT INTO DATABASE 
	 **/

	$app->post('/bitacora/', function($request , $response) use ($app, $sql){
		
		$json 	= $request->getParsedBody();
		$object = json_decode(json_encode($json), FALSE);

		print_r($object);
    	$model  = new BitacoraModel();
     	$model->ins($object, $sql);


    	return $object;
	});
	

