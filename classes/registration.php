<?php 

class Registration{
    private $registration_id;
    private $name;
    private $surname;
    private $age;
    private $phone;
    private $email;
    private $password;

    public function __construct($registration_id, $name, $surname, $age, $phone, $email, $password) {
        $this->registration_id = $registration_id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->phone = $phone;
        $this->email= $email;
        $this->password = $password;
    }
}



?>