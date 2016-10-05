<?php

	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	
	# the host used to access DB
    define('DB_HOST', 'localhost');
    # the username used to access DB
    define('DB_USER', 'root');
    # the password for the username
    define('DB_PASS', 'helagone13');
    # the name of your databse
    define('DB_NAME', 'nissansad_db');
    	
  
	require 'vendor/autoload.php';
	require('./settings/conecction.php');
	

	$app = new \Slim\App;
	$sql = new MySQLNissan(DB_HOST, DB_NAME, DB_USER, DB_PASS);

	//Ruta de Usuarios
	require('./routes/sad_users/routes.users.php');

	//Ruta de Agencias
	require('./routes/sad_dealers/routes.dealers.php');

	//Ruta de automoviles
	require('./routes/sad_automoviles/routes.automoviles.php');

	//Ruta de bitacora
	require('./routes/sad_bitacora/routes.bitacora.php');

	//Ruta de cancelacionbo
	require('./routes/sad_cancelacionbo/routes.cancelacionbo.php');

	//Ruta de cancelacionbo_partes
	require('./routes/sad_cancelacionbo_partes/routes.cancelacionbo_partes.php');

	//Ruta de cancelacionbo_resp
	require('./routes/sad_cancelacionbo_resp/routes.cancelacionbo_resp.php');

	//Ruta de control
	require('./routes/sad_control/routes.control.php');

	//Ruta de estadisticas
	//require('./routes/sad_estadisticas/routes.estadisticas.php');

	//Ruta de graficas
	//require('./routes/sad_graficas/routes.graficas.php');

	//Ruta de informacion tecnica
	require('./routes/sad_infotech/routes.infotech.php');
   	
   	//Ruta de modelos
   	require('./routes/sad_modelos/routes.modelos.php');

   	//Ruta de perfiles
   	//require('./routes/sad_perfiles/routes.perfiles.php');

	//Ruta de tktBackorder
	require('./routes/sad_tktbackorder/routes.tktbackorder.php');

	//Ruta de hrr
	require('./routes/sad_tkthrr/routes.tkthrr.php');

	//Ruta de tktInfotech
	require('./routes/sad_tktinfotech/routes.tktinfotech.php');

	//Ruta de tktotros
	require('./routes/sad_tktotros/routes.tktotros.php');

	//Ruta de tktprecios
	require('./routes/sad_tktprecios/routes_tktprecios.php');

	//Ruta de tktsegpedido
	require('./routes/sad_tktsegpedido/routes.tktsegpedido.php');

	//Ruta de tktunidadinm
	require('./routes/sad_tktunidadinm/routes.tktunidadinm.php');

	//Ruta de tktunidadinm_llaves
	require('./routes/sad_tktunidadinm_llaves/routes.tktunidadinm_llaves.php');

	//Ruta de usuarios
	//require('./routes/sad_usuarios/routes.usuarios.php');

	//Ruta de zonas
	require('./routes/sad_zonas/routes.zonas.php');

	//Ruta de unidadinm_resp
	require('./routes/sad_tktunidadinm_resp/routes.tktunidadinm_resp.php');



	// API USERS

	$app->get('/', function (){
   
   	 	echo "services";

	});	

	$app->run();