<?php
	
	require_once('./model/sad_tktinfotech/tktinfotech.model.php');

	/**
	 * GET ALL DEALERS
	 **/


	$app->get('/tktinfotech/', function () use ($app, $sql) {
		
		//Model
		$model  = new Tktinfotech();
		$result = $model->get( $IdDealer, $Perfil, $IdUsuario = 150, $FechaIni = '', $FechaFin = '', $NoTicket = '', $Escalonado = 0, $sql );
		return $result;

	});

	$app->get('/tktinfotech/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;
	});
	

