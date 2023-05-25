<?php 
session_start();

//database connection

include "databaseconn.php";

// variable declaration

@$username1 = $_SESSION['userName'];
@$deleteBTN = $_GET["DeleteMyAccount"];
@$redirectBTN = $_GET["redirecttoprofile"];

// user account deletion from database

if(isset($deleteBTN)) {

    $sql = "DELETE FROM Users WHERE Username = '$username1'";


if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
       header("location:login.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

}

// redirection into profile file

if(isset($redirectBTN)) {

header("location:profile.php");

}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="DeleteAcount.css?v=<?php echo time(); ?>">

  <title>Delete</title>
</head>

<body>
  <header>
    <div id="website_logo1">
      <img src="logo.png">
    </div>
  </header>

    <div id="fatherDiv">

      <div id="sonDiv">

         <div id="profile_ifo">
             <img alt="profile picture" src="<?php echo $_SESSION['image'] ?>">
              <p id="profileName"> <?php echo $_SESSION['First Name']. "\t" . $_SESSION['Last Name'] ?></p>
          </div>

            <div id="delete_section">

            <div>
  
            <button type="submit"  id="showBtn"> Delete My Account </button>
            <p><a href="profile.php">Back to Profile</a></p>

</div>
            </div>

            <div id="confirmationDiv">

            <form method="get" action="">
              <p> are you sure ? </p>
            <input type="submit" Name="DeleteMyAccount" value="Yes">
            <input type="submit" Name="redirecttoprofile" value="No">
            <p> <b>Note:</b> you'll never gonna get this account<br> back if you click Yes </p>
            </form>
            
            </div>

      </div>
    </div>

    <script src="DeleteAcount.js">

    </script>

</body>

</html>