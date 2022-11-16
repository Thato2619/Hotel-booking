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
        $query = INSERT into `Registration`(name, surname, age, phone, email, password) VALUES ()

    }

    
    ?>
</body>
</html>
