<?php
	class Infotech{
		/*
			GET
		*/
		function get($IdAgencia, $IdUsuario, $sql){
			$consulta = "SELECT * FROM sad_infotech $where;";
			$sql->query($consulta);
   		
   			foreach($sql->query($consulta) as $row) {
	        	$infotech[] = $row;
	    	}

	 		return json_encode($infotech);
		}
	}
?>