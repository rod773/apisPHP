<?php

class Database
{
    public function __construct(
        private $host,
        private $name,
        private $user,
        private $password
    ) {
    }


    public function getConnection(): PDO
    {

        $dsn =
            "mysql:host = {$this->host};" .
            "mysql:dnbame = {$this->name};" .
            "mysql:charset = UTF-8";

        return new PDO(
            $dsn, $this->user, $this->password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

    }

}