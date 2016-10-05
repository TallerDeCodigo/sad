<?php
	require_once('./model/sad_tktunidadinm_resp/tktunidad_inm_resp.model.php');
	/**
	 * GET ALL DEALERS
	 **/
	$app->get('/unidadinm_resp/', function () use ($app, $sql) {	
		//Model
		$model  = new unidadinm_respModel();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;
	});

	$app->get('/unidadinm_resp/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});

?>