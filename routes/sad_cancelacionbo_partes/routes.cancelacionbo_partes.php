<?php
	require_once('./model/sad_cancelacionbo_partes/cancelacionbo_partes.model.php');

	$app->get('/cancelacionbo_partes/', function () use ($app, $sql) {	
		//Model
		$model  = new Cancelacionbo_partes();
		$result = $model->get($NoTicket = '', $sql ); // <--parametros que recibe
		
		return $result;
	});

?>