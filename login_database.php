<?php include 'connect_database.php' ?>

<?php
require('steamauth/steamauth.php');
?>

<?php
require('steamauth/userInfo.php');
?>

<?php

    
    $steamprofile  = $_SESSION['steam_personaname'];
    //$topup = $_POST[''];
    //$level = $_POST[''];
    
        
    }
    
    mysqli_query($connect, "INSERT INTO login_database (Name_id,topup)
                            VALUES('$steamprofile','$topup')");
    
       
   

?>