<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "todolist";
    private $username = "root";
    private $password = "";
    public $conn;


    $array = $pdo->query("SELECT id, tasks, as start,url 
    FROM todos")->fetchAll(PDO::FETCH_ASSOC);
     echo json_encode($array);
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    
    }
}


?>