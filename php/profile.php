<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$conn = new mysqli('127.0.0.1', 'root', 'testtest', 'guvi');

if (!$conn) {
    die(mysqli_connect_error($con));
}

extract($_POST);

if (
    isset($_POST['nameSend']) && isset($_POST['emailSend']) &&
    isset($_POST['mobileSend']) && isset($_POST['placeSend'])
) {
    $sql = "SELECT id FROM register where email='$emailSend'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];


    $sql = "UPDATE register SET fullname='$nameSend', email='$email', mobile='$mobileSend', place='$placeSend' WHERE id='$id'";
}
