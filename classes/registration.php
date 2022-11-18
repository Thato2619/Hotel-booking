<?php 

class Registration{
    private $name;
    private $surname;
    private $age;
    private $phone;
    private $email;
    private $password;

    public function __construct($name, $surname, $age, $phone, $email, $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->phone = $phone;
        $this->email= $email;
        $this->password = $password;
    }
    #create a method for when registration input is left empty
    private function emptyInput() {
        $results;
        if(empty($this->$name) || empty($this->$surname) || empty($this->$age) || empty($this->$phone || empty($this->$password) || )) {
            $results = false;
        }
        else{
            $results = true;
        }
        return $results;
    }
}



?>