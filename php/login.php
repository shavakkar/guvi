<?php

$conn = new mysqli('127.0.0.1', 'root', 'testtest', 'guvi');

if (!$conn) {
    die(mysqli_connect_error($con));
}


extract($_POST);

if (
    isset($_POST['emailSend']) && isset($_POST['passwordSend'])
) {

    // echo "Success";

    $sql = "SELECT * FROM register WHERE (email='$emailSend' AND password='$passwordSend')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    if ($emailSend === $row['email'] && $passwordSend === $row['password']) {
        // $_SESSION["id"] = $id;
        // $_SESSION['username'] = $username;
        // header("Location: profile.php");
        // exit();
        echo "Success";
    }
    if ($emailSend !== $row['email'] && $passwordSend !== $row['password']) {
        echo "Invalid Email & Invalid Password!";
    }
    if ($emailSend !== $row['email']) {
        echo "Invalid Email";
    }
    if ($passwordSend !== $row['password']) {
        echo "Invalid Password!";
    }
}
