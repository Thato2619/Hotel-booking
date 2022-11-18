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

    public function __construct($host, $Name, $Surname, $Age, $phone, $Email, $password, $db_name){
            $this->host = $host;
            $this->Name = $Name;
            $this->Surname = $Surname;
            $this->Age = $Age;
            $this->host = $host;
            $this->host = $host;
            $this->host = $host;
            $this->host = $host;

        };
    }