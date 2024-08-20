<?php
include("config.php");

extract($_POST);
$query = "INSERT INTO `enroll`(`fullName` ,`email` , `phoneNumber`, `courses`) VALUES ('" . $fullName. "' ,' " . $email. "' ,' " . $phoneNumber . "' ,  '" . $courses. "')";
$result = $mysqli->query($query);
if (!$result) {
    echo "Something went Wrong" . $mysqli->error;
}

echo "Thanks you for submittijlly your Query";
$mysqli->close();


?>