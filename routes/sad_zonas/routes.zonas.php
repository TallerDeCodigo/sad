<?php
	require_once('./model/sad_zonas/model.zonas.php');
	/**
	 * GET ALL DEALERS
	 **/
	$app->get('/zonas/', function () use ($app, $sql) {	
		//Model
		$model  = new DealersModel();
		$result = $model->get($activo, $sql);
		return $result;
	});

	$app->get('/zonas/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});

		/**
		 * INSERT INTO DATABASE 
		 **/
		$app->post('/zonas/', function($request, $response, $args) use ($app, $sql){
			
			$json = $request->getBody();

	    	$data = json_decode($json, true); 

	    	$model  = new DealersModel();

	    	$model->insert($data, $sql);

	    	return $model->insert($data);
		});
?>