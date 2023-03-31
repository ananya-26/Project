<?php


require('config.php');


extract($_POST);


$sql = "INSERT into reservation (name,email,phone,date,time,people,message) VALUES('" . $name . "','" . $email . "','" . $phone . "','" . $date . "','" . $time . "','" . $people . "','" . $message . "')";

$success = $mysqli->query($sql);


if (!$success) {
    echo  "<p style='padding: 15px; color: red; background: #ffeeee; font-weight: bold; font-size: 29px; border-radius: 4px; text-align: center;'>Could not place reservation. Please try again</p>";

}


echo "<p style='padding: 15px; color: green; background: #eeffee; font-weight: bold; font-size: 29px; border-radius: 4px; text-align: center;'>Reservation placed successfully. Please Note that reservation expires after one hour</p>";



$mysqli->close();


?>