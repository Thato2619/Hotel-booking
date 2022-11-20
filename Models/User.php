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

        $this->$id = $this->generatorId(); #create private function to randomize id number
    }

    //add methods to the id value
    private function generateId() {
        $randomNum = rand(10000, 60000);
        $id = md5($randomNum);

        switch ($this->role) {
            case 'staff':
                $staffId = "staff";
                return $staffId . $id;
                break;

            default:
            $customerId = "customer";
            return $customerId . $id;
            break;
        }   

    }
}




?>