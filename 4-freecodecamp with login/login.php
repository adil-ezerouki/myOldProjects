<?php 

session_start();
error_reporting(0);

// database connect

include "databaseconn.php";


// get input and button values 

@$userName = $_GET["userName"];
@$pasword = $_GET["password"];
@$submit = $_GET["submit"];
$_SESSION["userName"] = $userName;



// compare the input values with values from database


@$rightUandP = "SELECT * FROM users WHERE Username = '$userName' AND pasword = '$pasword' LIMIT 1";
@$result = mysqli_query($conn, $rightUandP);
@$row = mysqli_fetch_assoc($result);

if(isset($submit)) {
    if($row['Username'] === $userName && $row['pasword'] === $pasword) {
        $_SESSION["Let In"] = "yes";
        header("location:profile.php");
    } else {
        $error = "userName or password is invalid";
    } }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="favicon.png">
    <title>Login</title>
</head>

<body onload="document.form.login.focus()">

    <header>
        <div id="website_logo">
            <img src="logo.png">
        </div>
    </header>
    <div id="form">
        <div>
            <form name="form" method="GET" action="">
            <p id="sucess"> <?php echo $_SESSION["succes"] ?> </p> <br>
                <h1>Login</h1>
                <label name="userName"></label> <br>
                <input id="userName" name="userName" required type="text" placeholder="Username"> <br>
                <label name="password"></label> <br>
                <input id="password" name="password" required type="password" placeholder="Passsword"> <br> <br>
                <input type="submit" name="submit" value="login"> <br> <br>
                <p id="error"> <?php echo $error ?> </p> <br>
                <p>if you are new !! <a href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>
</body>

</html>