<?php
/**
*  conecction to databse
*/

class MySQLNissan extends PDO
{

	public function __construct($hostname = null, $dbname = null, $username = null, $password = null){
		$dsn = 'mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8';
   		parent::__construct($dsn, $username, $password);
	}

	function query($query){
        $statement = parent::query($query);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement;
    }

   
}

	