

<?php
session_start();
require_once ("./Config/db_connection.php");
require ('./Registration/index.php');
include_once ("./Login/index.php");


$register = new Register();
if(isset($_POST['Sign In'])){
    $outcome = $register->register($_POST['Full_Name'] , $_POST['Age'] , $_POST['Phone'], $_POST['Email'], $_POST['Password'], $_POST['Staff_Id'], $_POST['Role']);

    if($outcome === 1){
        
    }
}
//create login using class name from database.config.php
$login = new Login();
if(isset($_POST['Login'])){
    $result = $login->login($_POST['$Email'] , $_POST['$password']);

    if($result === 1){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login->Customer_Id();
        header(("Location: index.php"));
    }
    elseif($result === 10){
        echo
        "<script> alert('Wrong password')</script>";
    }
    elseif($result === 100){
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
    <title>Hotel Home Page</title>
    <!--Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS stylesheet-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Navbar bootstrap -->
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid" p-0>
            <a class="navbar-brand" href="#">EDEN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br>

    <!-- Heading for Eden Hotel -->
    <figure class="text-center">
        <blockquote class="blockquote">
            <h4 class="display-1">Welcome to Eden Hotel</h4>
        </blockquote>
        <figcaption class="blockquote-footer">
            <p class="lead">
                A place where your heart is full and your mind is free.
            </p>
        </figcaption>
    </figure>

    <br>

    <!-- add cards that displays type of rooms -->
    <div class="row">
        <div class="col-md-10">
            <!-- Types of room in the hotel -->

            <!-- card of single bedroom -->
            <div class="row ">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="./Hotel_Home_Page/Images/single_bedroom.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Standard Bedroom</h5>
                            <h6>Amenities</h6>
                            <ul>
                                <li>Free Wifi</li>
                                <li>Heart of the city</li>
                                <li>Premimum coffee</li>
                                <li>Easy transporation</li>
                                <li>min = 1, max = 2</li>
                            </ul>
                                <p class="card-text">This is one of our best seller due to the price that accomdatess anyone that wants to take a break.</p>
                                <a href="#bookings" class="btn btn-success">R500 per night</a>
                                < </div>
                        </div>
                    </div>
                    <!-- card of deluxe bedroom -->
                    <div class="col-md-4  mb-4">
                        <div class="card">
                            <img src="./Hotel_Home_Page/Images/deluxe_room.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Deluxe Bedroom</h5>
                                <h6>Amenities</h6>
                                <ul>
                                    <li>Free Wifi</li>
                                    <li>Beautiful View</li>
                                    <li>Airport Transfer</li>
                                    <li>Renatl cars</li>
                                    <li>min = 3, max = 4</li>
                                </ul>
                                    <p> class="card-text">Welcome to the Deluxe experience. Where quality and comfort are the forefront to rest fun and rest.</p>
                                    <a href="#bookings" class="btn btn-success">R850 per night</a>
                            </div>
                        </div>
                    </div>
                    <!-- card of view_with_view-->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="./Hotel_Home_Page/Images/room_with_view.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Room-with-view</h5>
                                <h6>Amenities</h6>
                                <ul>
                                    <li>Free Wifi</li>
                                    <li>outstanding scenic view</li>
                                    <li>safe area</li>
                                    <li>Rental cars</li>
                                    <li>free toiletries and bath robes</li>
                                    <li>min = 2, max = 4</li>
                                </ul>
                                <p class="card-text">If you thought paradise was fake, then you have not seen this beautiful scenic place. There is a right balance of night life and day life. surrounded by scenic  views</p>
                                <a href="#bookings" class="btn btn-success">R1350 per night</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <!-- Types of room in the hotel -->
            <div class="row">
                <!-- card of room of luxury-->
                <div class="col-md-4  mb-4">
                    <div class="card">
                        <img src="./Hotel_Home_Page/Images/luxury_bedroom.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Luxurious Bedroom</h5>
                            <h6>Amenities</h6>
                                <ul>
                                    <li>Fast Wifi</li>
                                    <li>High ceiling</li>
                                    <li>Airport Transfer</li>
                                    <li>Air Conditioning</li>
                                    <li>Golf course</li>
                                    <li>Private</li>
                                    <li>min = 2, max = 5<li>
                                </ul>
                            <p class="card-text">This room is private and huge. It leaves you wanting more and more. Surrounded by unlimited room service.</p>
                            <a href="#" class="btn btn-success">R3500 per night</a>
                        </div>
                    </div>
                </div>

                <!-- card of double room -->
                <div class="col-md-4  mb-4">
                    <div class="card">
                        <img src="./Hotel_Home_Page/Images/double_bedroom.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Double Bedroom</h5>
                           <h6>Amenities</h6>
                                <ul>
                                    <li>Fast Wifi</li>
                                    <li>High ceiling</li>
                                    <li>Airport Transfer</li>
                                    <li>Air Conditioning</li>
                                    <li>Complimentary breakfast</li>
                                    <li>close to amusement parks & theme parks</li>
                                    <li>min = 2, max = 5<li>
                                </ul>
                            <p class="card-text">This room is catered to all families. This place literally specialises in family bonding time</p>
                            <a href="#" class="btn btn-success">R2500 per night</a>
                        </div>
                    </div>
                </div>

                <!-- card of premium king bedroom -->
                <div class="col-md-4  mb-4">
                    <div class="card">
                        <img src="./Hotel_Home_Page/Images/premium_king_bed.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Premimum Bedroom</h5>
                            <h6>Amenities</h6>
                                <ul>
                                    <li>Fast Wifi</li>
                                    <li>High ceiling</li>
                                    <li>Airport Transfer</li>
                                    <li>Air Conditioning</li>
                                    <li>Complimentary breakfast</li>
                                    <li>close to amusement parks & theme parks</li>
                                    <li>24hr personal room service</li>
                                    <li>Golf Course</li>
                                    <li>A personal valet</li>
                                    <li>The most scenic view of all time</li>
                                    <li>min = 2, max = 7<li>
                                </ul>
                            <p class="card-text">The most wanted room in our property due to the privacy. A great area for friendship gathering, maybe small weddings and family gatherings. You will be accommdated</p>
                            <a href="#" class="btn btn-success">R5000 per night</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>



    <!-- Bootsrap JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>