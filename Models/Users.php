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
        $this->fullName = $fullName;
        $this->age = $age;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;

        $this->$id = $this->generateId(); #create private function to randomize id number
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

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    function getFullName()
    {
        return $this->fullName;
    }
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    
    function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}




?>