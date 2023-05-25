<?php 

session_start();

include "databaseconn.php";

@$username1 = $_GET["Fname"];
@$lastname = $_GET["Lname"];
@$age = $_GET["Age"];
@$gender = $_GET["gender"];
@$userName = $_GET["userName"];
@$password1 = $_GET["password"];
@$Email = $_GET["Email"];
@$Image = $_GET["image"];
$error="";

if(!empty($username1) || !empty($lastname)
 || !empty($age) || !empty($gender)
 || !empty($userName) || !empty($password1)
  || !empty($Email) || !empty($Image)) {

        $SELECT = "SELECT Email FROM users WHERE Email = ? Limit 1";
        $INSERT = "INSERT INTO users (First_Name,Last_Name,Age,Gender,Username,pasword,Email,imagee) VALUES(?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt ->bind_param("s",$Email);
        $stmt -> execute();
        $stmt -> bind_result($Email);
        $stmt -> store_result();
        $rnum = $stmt -> num_rows;

        if($rnum == 0) {
            $stmt->close();

            $stmt = $conn ->prepare($INSERT);
            $stmt->bind_param("ssisssss",$username1 ,$lastname, $age ,$gender ,$userName,$password1 ,$Email ,$Image);
            $stmt->execute();

            $_SESSION["Let In"] = "yes";
            header("location:login.php");

            $sucess ="you have signed up successfully now login in";
            $_SESSION["succes"] = $sucess;
        } else {
            $error ="those information already exist, try again";
        }

        $stmt->close();
        $conn->close();
    
// die();

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="icon" href="favicon.png">
    <title>Sign up</title>
</head>
<body>

    <header>
        <div id="website_logo">
            <img src="logo.png">
        </div>
    </header>

    <div id="form">
        <div>
        <form action="" method="GET">
        <a href="login.php"> back to login </a> <br> <br>

        <p id="error"> <?php echo  $error ?> </p>
            <input type="text" id="Fname" Name="Fname" required placeholder="First name"> <br> <br>

            <input type="text" id="Lname" Name="Lname" required placeholder="Last name"> <br> <br>

            <input type="number" id="Age" Name="Age" required placeholder="Age"> <br> <br>

            <label for="Gender">Your Gender: </label> <br> <br>
            <input type="radio" id="Gender" Name="gender" value="Male" required > <span>Male</span>
            <input type="radio" id="Gender" Name="gender" value="Female" required> <span>Female</span> <br> <br>

            <input type="text" id="userName" Name="userName" required placeholder="Username"> <br> <br>

            <input type="password" id="Password" Name="password" required placeholder="Password"> <br> <br>

            <input type="password" id="comfirmPassword" Name="comfirmPassword" required placeholder="Comfirm Password"> <br> <br>

            <input type="email" id="Email" Name="Email" required placeholder="Email"> <br> <br>

            <label for="image">Your image:</label> <br> <br>
            <input type="file" name="image"> <br> <br>

            <input type="submit" value="Sign up">
        </div>

        </form>
    </div>
</body>
</html>