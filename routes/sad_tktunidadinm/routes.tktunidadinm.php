<?php
	require_once('./model/sad_tktunidadinm/tktunidadinm.model.php');
	/**
	 * GET ALL unidadinm
	 **/
	
	$app->get('/unidadinm/', function () use ($app, $sql) {
		//Model
		$model  = new TktUnidadinm();
		$result = $model->get($IdDealer, $Perfil, $IdUsuario, $FechaIni = '', $FechaFin = '', $NoTicket = '',$subp,$escalo,$alertaDat,$faltaProv, $sql);
		return $result;
	});

	$app->get('/unidadinm/:id', function ($id) use ($app, $sql)  {		

		echo $id;
		 // $model  = new DealersModel();
		 // $result = $model->get($id, $sql);
		 // return $result;

	});
	
?>