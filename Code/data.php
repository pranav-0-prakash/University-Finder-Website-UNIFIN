<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','contact_us');

if($conn->connect_error) {
    die('Unable to connect, please try again '.$conn->connect_error);
} else {

    $stmt = $conn->prepare("INSERT INTO contact(name, email, phone, message)
        VALUES(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$name, $email, $phone, $message);
    $stmt->execute();
    echo "Thanks for Contacting us...";
    $stmt->close();
    $conn->close();
}
?>