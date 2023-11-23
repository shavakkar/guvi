<?php

$conn = new mysqli('127.0.0.1', 'root', 'testtest', 'guvi');

if (!$conn) {
    die(mysqli_connect_error($con));
}

extract($_POST);

if (
    isset($_POST['nameSend']) && isset($_POST['usernameSend']) &&
    isset($_POST['emailSend']) && isset($_POST['dateSend']) &&
    isset($_POST['mobileSend']) && isset($_POST['passwordSend']) &&
    isset($_POST['placeSend']) && isset($_POST['genderSend']) &&
    isset($_POST['passwordConfSend'])
) {
    if ($passwordSend !== $passwordConfSend) {
        echo "Password Doesn't match";
    } else {

        $sql = "INSERT INTO `register`(fullname,username,email,mobile,place,gender,dob,password) VALUES('$nameSend','$usernameSend','$emailSend','$mobileSend','$placeSend','$genderSend', '$dateSend', '$passwordSend')";

        $result = mysqli_query($conn, $sql);
    }
}
