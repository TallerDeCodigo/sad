<?php
	require_once('./model/users/users.model.php');

	$app->get('/usuarios/', function() use ($app, $sql){
		//Model
		$model = new UsuariosModel();
		$result = $model->get($agencia, $perfil, $sql);
		return $result;
	});
?>