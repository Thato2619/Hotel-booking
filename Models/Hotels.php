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

    //getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function setID($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getAvailableRooms()
    {
        return $this->availableRooms;
    }

    public function setAvailableRooms($availableRooms)
    {
        $this->availableRooms = $availableRooms;

        return $this;
    }
    public function getTotalBookings()
    {
        return $this->totalBookings;
    }

    public function setTotalBookings($totalBookings)
    {
        $this->totalBooking = $totalBookings;

        return $this;
    }
    public function getRating()
    {
        return $this->totalRating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }
    public function getStayDays()
    {
        return $this->stayDays;
    }

    public function setStayDays($stayDays)
    {
        $this->stayDays = $stayDays;

        return $this;
    }

    

}






?>