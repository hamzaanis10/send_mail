<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $mailTo = 'hamzaanis2014@gmail.com';
    $headers = "From: $email";
    $txt = "You recieved an email from $name <br> $message";

    mail($mailTo, $name, $txt, $headers);
    header('location: index.php?mailSend');

    $insert_query = "insert into contact_us(name, email, address, message)
        values('$name', '$email', '$address', '$message')";

    $result = mysqli_query($connection, $insert_query);
}
