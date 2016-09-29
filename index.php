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
   	
	// API USERS

	$app->get('/', function (){
   
   	 	echo "services";

	});	

	$app->run();