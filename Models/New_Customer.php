<?php 

require_once __DIR__ . "./Users.php";

//class to create user in database
class New_Customer{
    //create user via database
    public function createUser($DBConfig, $Users) {
        $connection = $DBConfig->connectToDatabase();

        //SQL statement to create or insert new user
        $statement = "INSERT INTO Users (id, fullName, Age, phone, password, email, staff_id, role)" .
        "VALUES ('".$Users->getId()."','".$Users->getFullName()."','".$Users->getPassword()."','".$Users->getEmail()."','".$Users->getRole()."')";

        //send in request
        if($result = $connection ->query($statement)) {

            return $result; //returns result whether its true or false
            $connection->close();
        }
        else{
            die("connection failed" . $connection->error);
        }

        //create function to read new user by ID
        public function getByID($DBConfig, $getId) {
            //connect via database
            $connection = $DbConfig->connectToDatabase();

            //SQL statement
            $statement = "SELECT * FROM Users WHERE Customer_id='$getId";
            
            if ($result = $connection->query($statement)) {

            // get 1 result
            $row = $result->fetch_object(); // returns a PHP stdObject

            
            if ($row !== null) {
            
                $userObject = new User(
                    $row->fullName,
                    $row->password,
                    $row->email,
                    $row->role
                );
                    
                $userObject->setId($row->id);

                return $userObject;
            } 
            } 
                                        
    
            else {

            echo $connection->error;
            die("Connection failed: " . $connection->connect_error); //die function to close connection in case of error
        }

        $connection->close();
    }
    

}

}








?>