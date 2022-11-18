<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <section>
        <form action="login.php" method="post">
            <h1>Registration</h1>
            <label>Name: </label>
            <input type="name" name="name" placeholder="Name" required> <br>
            <label>Surname: </label>
            <input type="surname" name="surname" placeholder="surname" required> <br>
            <label>Age: </label>
            <input type="age" name="age" placeholder="age" required> <br>
            <label>Phone: </label>
            <input type="phone" name="phone" placeholder="phone" required> <br>
            <label>Email: </label>
            <input type="email" name="email" placeholder="email" required> <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required> <br>

            <button type="submit">SIGN IN</button>
        </form>

        <form action="login.php" method="post">
            <h1>LOGIN</h1>
            <label>Email: </label>
            <input type="email" name="email" placeholder="Email address" required> <br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required> <br>

            <button type="submit">LOGIN</button>
        </form>
    </section>
</body>

</html>


<?php
/**
 * if (isset($_GET['error'])) { ?>
 * <p class="error"> <?php echo $_GET['error']; ?></p>
 * <?php } ?>  -->
 * <!-- add error message in php tags <?php if (isset($_GET['error'])) { ?> 
 * <p class="error"> <?php echo $_GET['error']; ?></p>
 * <?php } ?>-->
 */
           

