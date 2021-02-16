<?php 

$connect = mysqli_connect('localhost','root','','topup');
    if (mysqli_error($connect)) {
        echo 'Failed to connect';
    }

?>