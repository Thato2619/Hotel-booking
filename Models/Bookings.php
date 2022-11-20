<?php 
class Bookings extends Hotels{
    private $id;
    private $hotelName;
    private $customerEmail;
    private $phoneNumber;
    private $hotelId;
    private $customerId;
    private $checkInDate;
    private $checkOutDate;
    private $totalCost;

    public function __construct($id, $hotelName, $customerEmail, $phoneNumber, $hotelId, $customerId, $checkInDate, $checkOutDate, $totalCost)
    {
        $this->id = $id;
        $this->hotelName = $hotelName;
        $this->customerEmail = $customerEmail;
        $this->phoneNumber = $phoneNumber;
        $this->hotelId = $hotelId;
        $this->customerId = $customerId;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this-> totalCost = $totalCost;
    }

    

}





?>