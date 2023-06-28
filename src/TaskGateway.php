<?php


class TaskGateway
{
    private  $conn;

    public function __construct(private $database)
    {
        $this->conn = $database->getConnection();
    }

    public function getAll(){
        
        $sql = "select * from task order by name";

        $data = [];

        $stmt = $this->conn->query($sql);

       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $row['is_completed'] = (bool)$row['is_completed'];
        $data[] = $row;
       }

       return $data;
    }
}