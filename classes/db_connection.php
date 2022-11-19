<?php 
session_start();

class DbConfig{
    private $Name = 'root';
    private $Surname = 'root';
    private $Age = 'root';
    private $Email = 'root';
    private $Password = '';
    private $db_name = 'Users';
    private $host= 'localhost';
    private $port = 8888;

    public function connectToDatabase (){
        $mysqli = new mysqli( 
            $this->Name,
            $this->Surname,
            $this->Age,
            $this->Email,
            $this->Password,
            $this->host,
            $this->port,
        );

        //check connection 
    }
    }