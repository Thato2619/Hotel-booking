<?php 


require './Config/database.config.php';

//create login using class name from database.config.php
$login = new Login();
if(isset($_POST['Reserve'])){
    $result = $login->login($_POST['$Email'] , $_POST['$password']);

    if($result == 1){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login->userId();
        header(("Location: index.php"));
    }
    elseif($result == 10){
        echo
        "<script> alert('Wrong password')</script>";
    }
    elseif($result == 100){
        echo
        "<script> alert('User not registered')</script>";
    }
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
</head>

<body>
    <div>
        <div>
            <!-- add label of full name-->
            <label for="full_name">Full Name</label>
            <input id="full_name" type="text" name="name" placeholder="Full Name" required>
        </div>

        <div>
            <!-- add label of email-->
            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder=" Your Email address" required>
        </div>

        <div>
            <!-- add label of phone-->
            <label for="phone">Phone</label>
            <input id="phone" type="tel" name="Phone" placeholder="Your phone number" required>
        </div>
        <!-- Check number of adults attending-->
        <label for="adults">Adults</label>
        <div>
            <select id="adults" name="adults" required>
                <option disabled selected value="">----</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <div class="Gap"></div>

            <!-- Check number of adults attending-->
            <label for="adults">Children</label>
            <div>
                <select id="children" name="children" required>
                    <option disabled selected value="">----</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
        </div>

        <!-- Check hotel rooms(types of hotel rooms) available-->
        <label for="adults">Hotels</label>
        <div>
            <select id="hotels" name="hotel" required>
                <option disabled selected value="">----</option>
                <option value="Standard">Standard</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Room-With-View">Room-With-View</option>
                <option value="Luxury">Luxury</option>
                <option value="Double">Double</option>
                <option value="Premium">Premium</option>
            </select>

            <!-- arrival and deprarture-->
            <div class="wrapper">
                <div>
                    <label for="Check-In">Check-In</label>
                    <div class="field">
                        <input id="Check-In" type="date" name="Check-In" required>
                    </div>
                </div>
                <div class="gap"></div>
                <div>
                    <label for="departure">Check Out</label>
                    <div class="field">
                        <input id="Check-Out" type="date" name="Check-Out" required>
                    </div>
                </div>
            </div>
            <button type="submit" value="Reserve">Reserve</button>


</body>

</html>

<!--
     private $id;
    private $name;
    private $price;
    private $availableRooms;
    private $totalBookings;
    private $rating;
    private $stayDays;
 -->