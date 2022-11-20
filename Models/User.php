<?php 

class Users{
    //create private fields in Users class
    private $id;
    private $fullName;
    private $age;
    private $phone;
    private $email;
    private $password;
    private $role;

    //constructor
    public function __construct($id, $fullName, $age, $phone, $email, $password, $role)
    {
        $this->$fullName;
        $this->age;
        $this->phone;
        $this->email;
        $this->password;
        $this->role;

        $this->$id = $this->generatorId()

    }
}




?>