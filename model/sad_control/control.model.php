<?php
	class Control{
		/*
			GET
		*/
		
		function get($sql){
			$consulta = "SELECT * FROM sad_control";
			$sql->query($consulta);
   		
	   		foreach($sql->query($consulta) as $row) {
	        	$control[] = $row;
	    	}

	 		return json_encode($control);
		}
	}
?>