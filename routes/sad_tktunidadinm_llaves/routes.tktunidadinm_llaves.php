<?php
	require_once('./model/sad_tktunidadinm_llaves/tktunidadinm_llaves.model.php');
	/**
	 * GET ALL DEALERS
	 **/
	$app->get('/unidadinmllaves/', function () use ($app, $sql) {	
		//Model
		$model  = new UnidadInmLlaves();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '', $subp, $escalo, $alertaDat, $faltaProv, $sql);
		return $result;
	});

	$app->get('/unidadinmllaves/:id', function ($id) use ($app, $sql)  {		
		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});
?>