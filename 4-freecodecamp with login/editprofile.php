<?php 
session_start();

include "databaseconn.php";

// variable declaration

@$New_firstname = $_GET["Fname"];
@$New_lastname = $_GET["Lname"];
@$New_age = $_GET["Age"];
@$New_gender = $_GET["gender"];
@$New_userName = $_GET["userName"];
@$New_password1 = $_GET["password"];
@$New_Email = $_GET["Email"];
@$New_Image = $_GET["image"];


@$Edit_FirstName = $_GET["EditFirstname"];
@$Edit_LastName = $_GET["EditLastname"];
@$Edit_age = $_GET["EditAge"];
@$Edit_gender = $_GET["EditGender"];
@$Edit_userName = $_GET["EditUsername"];
@$Edit_password1 = $_GET["EditPassword"];
@$Edit_Email = $_GET["EditEmail"];
@$Edit_Image = $_GET["Editimage"];


@$Old_Image = $_SESSION['image'];
$_SESSION["New_userName"] = $New_userName;


// submit data individually
         
            //  first name edit

if(isset($Edit_FirstName)) {

$sql = "UPDATE users SET First_Name = '$New_firstname' WHERE imagee = '$Old_Image'";

if (mysqli_query($conn, $sql)) {
  @$succes1 = "Your New First Name is saved !!";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$_SESSION['First Name'] = $New_firstname;

mysqli_close($conn);

}
             //  last name edit


if(isset($Edit_LastName)) {

    $sql = "UPDATE users SET Last_Name = '$New_lastname' WHERE imagee = '$Old_Image'";
    
    if (mysqli_query($conn, $sql)) {
      @$succes1 = "Your New Last Name is saved !!";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    $_SESSION['Last Name'] = $New_lastname;
    
    mysqli_close($conn);
    
    }

             //  Age edit

    if(isset($Edit_age)) {

        $sql = "UPDATE users SET Age = '$New_age' WHERE imagee = '$Old_Image'";
        
        if (mysqli_query($conn, $sql)) {
          @$succes1 = "Your New Age is saved !!";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        
        }
             //  gender edit

        if(isset($Edit_gender)) {

            $sql = "UPDATE users SET Gender = '$New_gender' WHERE imagee = '$Old_Image'";
            
            if (mysqli_query($conn, $sql)) {
              @$succes1 = "Your New Gender is saved !!";
            } else {
              echo "Error updating record: " . mysqli_error($conn);
            }
            
            mysqli_close($conn);
            
            }

                //  Username edit


            if(isset($Edit_userName)) {

                $sql = "UPDATE users SET Username = '$New_userName' WHERE imagee = '$Old_Image'";
                
                if (mysqli_query($conn, $sql)) {
                  @$succes1 = "Your New Username is saved !!";
                } else {
                  echo "Error updating record: " . mysqli_error($conn);
                }
                
                mysqli_close($conn);
                
                }

             //  Password edit
        
            if(isset($Edit_password1)) {

                $sql = "UPDATE users SET pasword = '$New_password1' WHERE imagee = '$Old_Image'";
                
                if (mysqli_query($conn, $sql)) {
                  @$succes1 = "Your New Password is saved !!";
                } else {
                  echo "Error updating record: " . mysqli_error($conn);
                }
                
                mysqli_close($conn);
                
                }
          
             //  Email edit

            if(isset($Edit_Email)) {

                    $sql = "UPDATE users SET Email = '$New_Email' WHERE imagee = '$Old_Image'";
                    
                    if (mysqli_query($conn, $sql)) {
                      @$succes1 = "Your New Email is saved !!";
                    } else {
                      echo "Error updating record: " . mysqli_error($conn);
                    }
                    
                    mysqli_close($conn);
                    
                    }

             //  Image edit

                    if(isset($Edit_Image)) {

                        $sql = "UPDATE users SET imagee = '$New_Image' WHERE imagee = '$Old_Image'";
                        
                        if (mysqli_query($conn, $sql)) {
                          @$succes1 = "Your New Image is saved !!";
                        } else {
                          echo "Error updating record: " . mysqli_error($conn);
                        }
                        
                        $_SESSION['image'] = $New_Image;
                        mysqli_close($conn);
                        
                        }

// submit data at once

@$Edit_All = $_GET["Editall"];

if(isset($Edit_All)) {

        //  first name edit


  $sql = "UPDATE users SET First_Name = '$New_firstname' WHERE imagee = '$Old_Image'";
  
  if (mysqli_query($conn, $sql)) {
    @$succes1 = "all the informartion were edited successfully !!";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  $_SESSION['First Name'] = $New_firstname;


  //  last name edit

  
      $sql = "UPDATE users SET Last_Name = '$New_lastname' WHERE imagee = '$Old_Image'";
      
      if (mysqli_query($conn, $sql)) {
        @$succes1 = "all the informartion were edited successfully !!";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

      $_SESSION['Last Name'] = $New_lastname;
    

      //  Age edit

  
          $sql = "UPDATE users SET Age = '$New_age' WHERE imagee = '$Old_Image'";
          
          if (mysqli_query($conn, $sql)) {
            @$succes1 = "all the informartion were edited successfully !!";
          } else {
            echo "Error updating record: " . mysqli_error($conn);
          }
          

//  gender edit
  
              $sql = "UPDATE users SET Gender = '$New_gender' WHERE imagee = '$Old_Image'";
              
              if (mysqli_query($conn, $sql)) {
                @$succes1 = "all the informartion were edited successfully !!";
              } else {
                echo "Error updating record: " . mysqli_error($conn);
              }
              
  //  Username edit
  
                  $sql = "UPDATE users SET Username = '$New_userName' WHERE imagee = '$Old_Image'";
                  
                  if (mysqli_query($conn, $sql)) {
                    @$succes1 = "all the informartion were edited successfully !!";
                  } else {
                    echo "Error updating record: " . mysqli_error($conn);
                  }
                  
           //  Password edit
  
                  $sql = "UPDATE users SET pasword = '$New_password1' WHERE imagee = '$Old_Image'";
                  
                  if (mysqli_query($conn, $sql)) {
                    @$succes1 = "all the informartion were edited successfully !!";
                  } else {
                    echo "Error updating record: " . mysqli_error($conn);
                  }
                  
//  Email edit

  
                      $sql = "UPDATE users SET Email = '$New_Email' WHERE imagee = '$Old_Image'";
                      
                      if (mysqli_query($conn, $sql)) {
                        @$succes1 = "all the informartion were edited successfully !!";
                      } else {
                        echo "Error updating record: " . mysqli_error($conn);
                      }
                      
  //  Image edit
                          $sql = "UPDATE users SET imagee = '$New_Image' WHERE imagee = '$Old_Image'";
                          
                          if (mysqli_query($conn, $sql)) {
                            @$succes1 = "all the informartion were edited successfully !!";
                          } else {
                            echo "Error updating record: " . mysqli_error($conn);
                          }
                          
                          $_SESSION['image'] = $New_Image;
                          mysqli_close($conn);
                          
                          }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="editprofile.css?v=<?php echo time(); ?>">
    <title>Edit</title>
</head>
<body>
<header>
        <div id="website_logo">
            <img src="logo.png">
        </div>
    </header>
    <p id="success_message"> <?php echo @$succes1 ?>

    <div id="form">
        <div>
        <form action="" method="GET">

        <img alt="profile picture" src="<?php echo $_SESSION['image'] ?>">
        <p id="profileName"><?php echo $_SESSION['First Name']. "\t" . $_SESSION['Last Name'] ?></p>
        <a href="profile.php"> back to profile </a> <br> <br>
            <input type="text" class="inline" id="Fname" Name="Fname" placeholder="Edit First name">
            <input type="submit"  name="EditFirstname"value="Edit First name"> <br> <br>

            <input type="text" class="inline" id="Lname" Name="Lname"  placeholder="Edit Last name">
            <input type="submit"  name="EditLastname"value="Edit Last name"> <br> <br>

            <input type="number" class="inline" id="Age" Name="Age"  placeholder="Edit Age"> 
            <input type="submit"  name="EditAge"value="Edit Age"> <br> <br>

            <label for="Gender">Edit Gender: </label> <br> <br>
            <input type="radio" id="Gender" Name="gender" value="Male"  > <span>Male</span>
            <input type="radio" class="inline" id="Gender" Name="gender" value="Female" > <span>Female</span> <br> <br>
            <input type="submit"  name="EditGender"value="Edit Gender"> <br> <br>

            <input type="text" class="inline" id="userName" Name="userName"  placeholder="Edit Username">
            <input type="submit"  name="EditUsername" value="Edit Username"> <br> <br>

            <input type="password" class="inline" id="Password" Name="password"  placeholder="Edit Password">
            <input type="submit"  name="EditPassword"value="Edit Password"> <br> <br>

            <input type="password" class="inline" id="comfirmPassword" Name="comfirmPassword"  placeholder="Comfirm Password">
            <input type="submit"  name="ComfirmPassword"value="Comfirm Password"> <br> <br>

            <input type="email" class="inline" id="Email" Name="Email"  placeholder="Edit Email">
            <input type="submit"  name="EditEmail"value="Edit Email"> <br> <br>

            <label for="image">Edit image:</label> <br> <br>
            <input type="file" class="inline" name="image">
            <input type="submit"  name="Editimage"value="Edit image"> <br><br>

            <input type="submit"  name="Editall"value="Submit all"> <br><br>

        </div>

        </form>
    </div>
</body>
</html>