<?php




class TaskGateway
{
    private $conn;

    public function __construct(private $database)
    {
        $this->conn = $database->getConnection();
    }
}