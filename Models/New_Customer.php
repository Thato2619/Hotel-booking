<?php 

require_once __DIR__ . "/Users.php";

//class to create user in database
class New_Customer{
    //create user via database
    public function createUser($DBConfig, $Users) {
        $connection = $DBConfig->connectToDatabase();

        //SQL statement to create or insert new user
        $statement = "INSERT INTO Users (Customer_id, Full_Name, Age, Phone, Email, Password, Staff_id, Role)" .
        "VALUES ('".$Users->getId()."','".$Users->getFullName()."','".$Users->getAge()."','".$Users->getPhone()."','".$Users->getPassword()."','".$Users->getEmail()."','".$Users->getRole()."')";

        //send in request
        if($result = $connection ->query($statement)) {
            return $result; //returns result whether its true or false
            $connection->close();
        }
        else{
            die("connection failed" . $connection->error);
        }
    }
    //Enables to read by ID
    public function readId($DBConfig, $UsersId) {
        //Connect to database
        $connection = $DBConfig->connectToDatabase();
        //place a sql statement
        $statement = "SELECT * FROM Users WHERE Customer_id='$UsersId' ";
        if ($result = $connection->query($statement)) {
            //get single result (only one)
            $row = $result->fetch_object(); //returns PHP object
        } if ($row!==null) {

            usersObject = new Users(
                $row->full
            )
        }
    }
}