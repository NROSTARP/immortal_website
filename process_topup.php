<?php include 'connect_database.php' ?>

<?php
require('steamauth/steamauth.php');
?>

<?php
require('steamauth/userInfo.php');
?>

<?php
    $steamprofile  = $_SESSION['status'];
    $nameuser=$_SESSION['steam_personaname'];
    $date  = $_POST['time_send'];
    $topup = $_POST['comment'];
    $imgtest = "images_topup/".$_FILES["imgInp"]["name"];
    
    if (move_uploaded_file($_FILES["imgInp"]["tmp_name"],$imgtest)) {

    }

    mysqli_query($connect, "INSERT INTO topup_database (Name_id,Name_user,Numbers,topup,bill)
                            VALUES('$steamprofile','$nameuser','$date','$topup','$imgtest')");

    if (mysqli_affected_rows($connect) > 0) {
        echo 'Topup Suscess';
        echo '<a href="index.php"> Back to Homepage</a>';
    } else {
        echo 'Topup Failed';
        echo '<a href="index.php"> Back to Homepage</a>';
    }



?>