<?php 
session_start();

class Connection{
    public $host = "localhost";
    public $Name= "root";
    public $Surname = "root";
    public $Age = "root";
    public $phone = "root";
    public $Email = "root";
    public $password = "";
    public $db_name = "Users";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->Name, $this->Surname, $this->Age, $this->phone, $this->Email, $this->password, $this->db_name);
    }
}
?>