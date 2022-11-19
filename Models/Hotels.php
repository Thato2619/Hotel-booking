<?php 

class Hotels {
    // fields of hotels 
    private $id;
    private $name;
    private $pricePerPrice;
    private $availableRooms;
    private $totalBookings;
    private $rating;

    //constructor
    public function __construct($id, $name, $pricePerPrice, $availableRooms, $totalBookings, $rating)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pricePerPrice = $pricePerPrice;
        $this->availableRooms = $availableRooms;
        $this->totalBookings = $totalBookings;
        $this->rating = $rating;

    }
}




?>