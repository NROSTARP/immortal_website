<?php include 'connect_topup.php' ?>

<?php


    //print_r($_POST)
    $date  = $_POST['time_send'];
    $topup = $_POST['comment'];
    //$bill  = $_POST['imgInp'];

    mysqli_query($connect, "INSERT INTO topup_database (Numbers,topup)
                            VALUES('$date','$topup')");
           
    if (mysqli_affected_rows($connect) > 0) {
        echo 'Topup Suscess';
        echo '<a href="index.html"> Back to Homepage</a>';
    } else {
        echo 'Topup Failed';
        echo '<a href="index.html"> Back to Homepage</a>';
    }
       
   

?>
