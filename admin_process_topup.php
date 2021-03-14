<?php include 'connect_database.php' ?>
<?php 

$data  = $_POST['name'];
session_start();

$connect = mysqli_connect('localhost:3306','cp211374_tao','sawada0765','cp211374_immortal_city');
    if (mysqli_error($connect)) {
        echo 'Failed to connect';
    }

$sql = "SELECT id,money FROM user_database WHERE id='".$data."'";
$result = $connect->query($sql);
if ($result) {
  while($row = $result->fetch_assoc()) {
 	$temp_money=$row["money"]+$_POST['num'];
 	$sqli = "UPDATE user_database SET money=".$temp_money."  WHERE id=".$data."";
 	$resulti = $connect->query($sqli);
 	$sql3 = "DELETE FROM `topup_database` WHERE `No.` = '".$_POST['count']."'";
 	echo $sql3;
 	$result3 = $connect->query($sql3);
 	echo $result3;
 }
  echo "successful";
}else{
  echo "error";
}
 $connect->close();


?>