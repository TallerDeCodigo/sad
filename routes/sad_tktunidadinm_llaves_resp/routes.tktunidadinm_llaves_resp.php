<?php
	require_once('./model/sad_tktunidadinm_llaves_resp/tktunidadinm_llaves_resp.model.php');
	/**
	 * GET unidad inmovilizada llaves resp
	 **/
	$app->get('/unidadinmllavesresp/', function () use ($app, $sql) {	
		//Model
		$model  = new unidadinmllavesrespModel();
		$result = $model->get($NoTicket, $Perfil, $sql);
		return $result;
	});

	$app->get('/unidadinmllavesresp/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});
?>