<?php 
if(isset($_POST['submit'])){
    //grab data from form once the submit button is clicked
    $Name = $_POST['name'];
    $Surname = $_POST['surname'];
    $Age = $_POST['age'];
    $phone = $_POST['phone'];
    $Email = $_POST['email'];
    $passwod = $_POST['password'];
    
    //instantiate Registration.php
    include "../classes/registration.php";
}






?>