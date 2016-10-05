<?php
	require_once('./model/sad_control/control.model.php');

	$app->get('/control/', function () use ($app, $sql) {
		
		//Model
		$model  = new Control();
		$result = $model->get($sql);
		return $result;
	});

	$app->get('/control/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 $model  = new Control();
		 $result = $model->get($id, $sql);
		 return $result;
	});

	/**
	 * INSERT INTO DATABASE 
	 **/
	$app->post('/control/', function($request, $response, $args) use ($app, $sql){
		$json = $request->getBody();
    	$data = json_decode($json, true); 
    	$model  = new Control();
    	$model->insert($data, $sql);
    	return $model->insert($data);
	});
?>