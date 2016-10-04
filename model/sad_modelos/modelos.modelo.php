<?php
	class ModelosModel{
		/*
			GET
		*/
		function get($sql){
			$consulta = "SELECT * FROM sad_modelos ORDER BY Clave DESC ;";

			$sql->query($consulta);
   		
	   		foreach($sql->query($consulta) as $row) {
		         $modelos[] = $row;
		    }

		 	return json_encode($modelos);
		}
	}
?>