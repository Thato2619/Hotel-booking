<?php 

class Hotels {
    // fields of hotels 
    private $id;
    private $name;
    private $price;
    private $availableRooms;
    private $totalBookings;
    private $rating;
    private $stayDays;

    //constructor
    public function __construct($id, $name, $price, $availableRooms, $totalBookings, $rating, $stayDays)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->availableRooms = $availableRooms;
        $this->totalBookings = $totalBookings;
        $this->rating = $rating;
        $this->stayDays = $stayDays;
    }

    //add methods to needed fields while using constructors
    public function __toString() {
        return $this->address . "-". $this->price;
    }

    public function totalPrice($price) {
        return $this->price = $this->price * $this->stayDays;
    }

}




?>