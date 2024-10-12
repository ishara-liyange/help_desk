<?php 
    include('connection.php');
    $user = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO ContactUs (FullName, Email, message) VALUES ('{$user}', '{$email}', '{$message}')";
    if ($conn->query($sql) === TRUE) {
        echo "Message saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

