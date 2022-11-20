<?php 
session_start();

class DbConfig{
    private $fullName = 'root';
    private $password = 'root';
    private $usersDb = 'Hotel Booking';
    private $host= 'localhost';
    private $port = 8888;

    #create database connection method
    public function connectToDatabase (){
        $mysqli = new mysqli( 
            $this->fullName,
            $this->password,
            $this->usersDb,
            $this->host,
            $this->port,
        );

        # check connection of database
        if($mysqli -> connect_error) {
            die("Connection failed:" . $mysqli->connect_error);
        } else {
            return $mysqli;
        }
    }
    }