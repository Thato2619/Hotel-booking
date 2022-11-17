<?php 
require_once('./config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <?php 
    #connect this php file to the database
    require('./Login/db_connection.php');
    #add the required values into the database
    if(isset($_REQUEST['Email'])) {
        $Email = stripslashes($_REQUEST['email']);
        $Email = mysqli_real_escape_string($con, '$email');
        $name = mysqli_real_escape_string($con, 'name');
        $name = stripslashes($_REQUEST['name']);
        $surname = mysqli_real_escape_string($con, 'surname');
        $surname = stripslashes($_REQUEST['surname']);
        $age = mysqli_real_escape_string($con, 'age');
        $age = stripslashes($_REQUEST['age']);
        $phone = mysqli_real_escape_string($con, 'phone');
        $phone = stripslashes($_REQUEST['phone']);
        $email = mysqli_real_escape_string($con, 'email');
        $email = stripslashes($_REQUEST['email']);
        $password = mysqli_real_escape_string($con, 'password');
        $password = stripslashes($_REQUEST['password']);
        #insert all the request values in database using query(variable)
        $query = "INSERT INTO `Registration` (name, surname, age, phone, email, password) VALUES ('name', 'surname', 'age', 'phone', 'email', 'password')";

        $result = mysqli_query($con, $query);

        if($result) {
            echo "<div class= 'form'>
            <h3>You are registered successfully</h3> <br>
            <p class= 'link'>Click here to <a href= './Login/login.php'>Login</a></p>
            </div>";
        }
        else{
            echo "<div class= 'form'>
            <h3>Please fill in the required fields</h3> <br>
            <p class= 'link'>Click here to <a href= './Registration/registration.php'>Login</a></p>
            </div>"; 
        }
    } else {
?>
<form class="form" action="" method="post">
    <h1>Registration</h1>
    <label>Name: </label>
    <input type="name" name="name" placeholder="name" required> <br>
    <label>Surname: </label>
    <input type="surname" name="surname" placeholder="surname" required> <br>
    <label>Age: </label>
    <input type="age" name="age" placeholder="age" required> <br>
    <label>Phone: </label>
    <input type="phone" name="phone" placeholder="phone" required> <br>
    <label>Email: </label>
    <input type="email" name="email" placeholder="Email address" required> <br>
    <label>password: </label>
    <input type="password" name="password" placeholder="password" required> <br>

</form>
<?php
    }

    ?>
</body>
</html>
 