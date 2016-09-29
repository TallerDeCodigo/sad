<?php 
	class AutomovilesModel{
		/*
			GET
		*/
		function get_atuomoviles($id=null, $sql){
			
			if($id != null){
				$where = "Id = ".$id;
			}else{
				$where = "";
			}

		}	
	}
?>