<?php

class Database {

	public $connection;


	public function __construct($config, $db, $username, $password){
	
		$dsn = "{$db}:" . http_build_query($config, '', ';');

		$this->connection = new PDO($dsn, $username, password: $password,  options: [
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]);
	}

	public function query($query, $params){
		
		$statement = $this->connection->prepare($query);
		
		$statement->execute($params);

		return $statement;
	}
} 
