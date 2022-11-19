<?php 
/*session_start();
//connect this page with database page
include "db_connection.php";

#validate form by if statement
if((isset($_POST['name'])) && ($_POST['surname'] && ($_POST['age'] && ($_POST['phone'] && ($_POST['email'] && ($_POST['password'])))))) {
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
#validate values in registration form
$name = validate($_POST['name']);
$surname = validate($_POST['surname']);
$age = validate($_POST['age']);
$phone = validate($_POST['phone']);
$email = validate($_POST['email']);
$password = validate($_POST['password']);

if(empty($email)) {
    header("Location: index.php?erro=User Name is required"); 
}
else if(empty($password)) {
    header("Location: index.php?erro=User Password is required");
}
else if(empty($name)) {
    header("Location: index.php?erro=User name is required");
}
else if(empty($surname)) {
    header("Location: index.php?erro=User surname is required");
}
else if (empty($age)) {
    header("Location: index.php?erro=User age is required");
}
else if (empty($phone)) {
    header("Location: index.php?erro=User phone is required");
}

$sql = "SELECT * FROM Users WHERE Email= 'email' AND Password='password'";

$results = mysqli_query($conn, $sql);

if(mysqli_num_rows($results) === 1 ) {
    $row = mysqli_fetch_assoc($results);
    if($row['Name'] === 'name' && $row['Surname'] === 'surname' && $row['Age'] === 'age' && $row['Phone'] === 'phone' && $row['Email'] === 'email' && $row['Password'] === 'password'){
        echo "You have successfully signed in !!";
        $_SESSION['Registration_id'] = $row['id'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Password'] = $row['password'];
        header("Location: homePage.php");
        exit();
    }
    else{
        header("Location: registration.php");
        exit();
    }

    

}
else{
    header("Location: registration.php");
    exit();
}/
