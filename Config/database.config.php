<?php

#use Connection as GlobalConnection;

session_start();

class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "root";
    public $db_name = "Users";
    public $conn;

    #add constructor 
    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
    }
}

#extend connection to Register class
class Register extends Connection{
    public function registration($Name, $Surname, $Age, $phone, $Email, $password){
        $duplciate = mysqli_query($this->conn, "SELECT * FROM Users WHERE Email = '$Email'");
        if(mysqli_num_rows($duplciate) > 0 ) {
            return 10; //email already exists
        }
        else{
            if($password == $password) {
                $query = "INSERT INTO Users VALUES('', '$Name', '$Surname', '$Age', '$phone', '$Email')";
                mysqli_query($this->conn , $query);
                return 1; //registration successful
            }
            else{
                return 100;
            }
        }
    }
}

class Login extends Connection{
    public $id;
    public function login($Email, $password) {
        $result = mysqli_query($this->conn,"SELECT * FROM Users WHERE Email = $Email ");
        $row = mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result) > 0){
            if ($password == $row["password"]){
                if($password == $row["password"]){
                    $this->id = $row["id"];
                    return 1;
                    //when returns 1 == Login successfully
                }
                else{
                    return 10;
                    //wrong password
                }
            }
            else{
                return 100;
                // User not registered
            }
        }
        

    }
    public function userId(){
        return $this->id;
    }
}




?>