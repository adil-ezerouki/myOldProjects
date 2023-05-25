<?php
session_start();

if($_SESSION["Let In"] != "yes") {
    header("location:login.php");
    exit();
}

include "databaseconn.php";

// Determine gender from Database

@$username = $_SESSION['userName'];

@$gender = "SELECT Gender FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $gender);
@$row = mysqli_fetch_assoc($result);

if(@$row['Gender'] === "Male") {
    @$Title = "Mr.";
} else {
    @$Title = "Miss.";
}


// Displaying gender and username
$welcome = "Good to see you here \t". @$Title . "\t". @$username;


// Displaying user data from database

@$new_username = $_SESSION["New_userName"];

$FN = "SELECT First_Name FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $FN);
@$row = mysqli_fetch_assoc($result);
$FN = $row["First_Name"] ;

$LN = "SELECT Last_Name FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $LN);
@$row = mysqli_fetch_assoc($result);
$LN = $row["Last_Name"] ;

$Age = "SELECT Age FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $Age);
@$row = mysqli_fetch_assoc($result);
$Age = $row["Age"] ;

$gender1 = "SELECT Gender FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $gender1);
@$row = mysqli_fetch_assoc($result);
$gender1 = $row["Gender"] ;

$password = "SELECT pasword FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $password);
@$row = mysqli_fetch_assoc($result);
$password = $row["pasword"] ;

$Email = "SELECT Email FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $Email);
@$row = mysqli_fetch_assoc($result);
$Email = $row["Email"] ;

$image = "SELECT imagee FROM users WHERE Username = '$username' OR Username = '$new_username' Limit 1";
@$result = mysqli_query($conn, $image);
@$row = mysqli_fetch_assoc($result);
$image = $row["imagee"] ;

// display last name, first name and picture sessions in editprofile.php file

$_SESSION['image'] = $image;
$_SESSION['First Name'] = $FN;
$_SESSION['Last Name'] = $LN;

// display data on the button click

if (isset($_SESSION["submit1"])) {

$FN = @$_SESSION['New First Name'] ;
$LN =  @$_SESSION['New Last Name'];
$Age =  @$_SESSION['New Age'];
$gender1 = @$_SESSION['New gender1'] ;
$password = @$_SESSION['New password'] ;
$Email = @$_SESSION['New Email'] ;
$image =  @$_SESSION['New image']; 
    
}

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css?v=<?php echo time(); ?>">
    <link rel="icon" href="favicon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Profile</title>
    
</head>
<body id="body" class='white' onload="document.form.login.focus()">

<header id="header">
        <div id="website_logo">
           <a id="profileBTN1"> <img class="profile" src="<?php echo $image ?>"> </a>
            <img id="headerImg" src="logo.png">
            <a id="profileBTN2"><img class="profile" src="<?php echo $image ?>"> </a>
        </div>
</header>

<div id="profile_ifo">
    <div>
    <h1> <?php echo $welcome ?> </h1>
    <img src="<?php echo $image ?>">
    <br>
    <br>
    <h2>Your information : </h2>
    <br>
    <br>
    <h3> First Name : <span class="info_display"> <?php echo $FN ?> <span> </h3>
    <h3> Last Name : <span class="info_display"><span> <?php echo $LN ?></h3>
    <h3> Age: <span class="info_display"><span> <?php echo $Age ?> </h3>
    <h3> Gender : <span class="info_display">  <?php echo $gender1 ?> <span> </h3>
    <h3> Password : <span class="info_display">  <?php echo $password ?> <span> </h3>
    <h3> Email : <span class="info_display"><span>  <?php echo  $Email ?> </h3>

    <button id="dark"> Dark Mode</button>

    <script src="profile.js"> </script>
</div>
</div>
</body>
</html>