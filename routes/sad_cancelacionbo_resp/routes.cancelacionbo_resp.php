<?php
	require_once('./model/sad_cancelacionbo_resp/cancelacionbo_resp.model.php');

	$app->get('/cancelacionbo_resp/', function () use ($app, $sql) {
		//Model
		$model  = new Cancelacionbo_resp();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;
	});

	$app->get('/cancelacionbo_resp/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});

	/**
	 * INSERT INTO DATABASE 
	 **/
	$app->post('/cancelacionbo_resp/', function($request, $response, $args) use ($app, $sql){
		$json = $request->getBody();
    	$data = json_decode($json, true); 
    	$model  = new Cancelacionbo_resp();
    	$model->insert($data, $sql);
    	return $model->insert($data);
	});
?>