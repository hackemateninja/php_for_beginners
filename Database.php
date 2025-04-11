<?php

class Database
{
    public $connection;

    public function __construct($config)
    {

        // $dsn = "{$db}:".http_build_query($config, '', ';');
        $dsn = 'sqlite:'.__DIR__.'/db/'.$config['name'];

        $this->connection = new PDO($dsn, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    public function query($query, $params)
    {

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}
