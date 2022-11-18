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
}
?>