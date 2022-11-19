<?php 
session_start();

class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "Users";
    public $conn;

    #add constructor 
    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
    }
}


?>