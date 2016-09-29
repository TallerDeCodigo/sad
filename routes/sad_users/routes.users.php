<?php
	
	//require '../../model/users/users.model.php';

	$app->get('/users/', function () use ($app, $sql) {
   		
   		$consulta = 'SELECT * FROM sad_agencias LIMIT 10';
   		
   		$sql->query($consulta);
 		
   		foreach($sql->query($consulta) as $row) {
	         $emparray[] = $row;
	    }
	 	 echo json_encode($emparray);
	});

	$app->post("/login", function () use ($app) {
	    $email = $app->request()->post('email');
	    $password = $app->request()->post('password');
	    $errors = array();
	    if ($email != "brian@nesbot.com") {
	        $errors['email'] = "Email is not found.";
	    } else if ($password != "aaaa") {
	        $app->flash('email', $email);
	        $errors['password'] = "Password does not match.";
	    }
	    if (count($errors) > 0) {
	        $app->flash('errors', $errors);
	        $app->redirect('/login');
	    }
	    $_SESSION['user'] = $email;
	    if (isset($_SESSION['urlRedirect'])) {
	       $tmp = $_SESSION['urlRedirect'];
	       unset($_SESSION['urlRedirect']);
	       $app->redirect($tmp);
	    }
	    $app->redirect('/');
	});


	