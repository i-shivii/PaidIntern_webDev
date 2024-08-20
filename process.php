<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `contactus`(`fullname` , `email` , `phone` , `city`, `message`) VALUES ('" . $fullname. "' ,' " . $email. "' ,' " . $phone . "' , '" . $city . "' , '" . $message. "')";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submittijlly your Query";
$mysqli->close();


?>