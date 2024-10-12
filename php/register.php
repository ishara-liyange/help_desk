<?php 
    include('connection.php');
    $user = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pwd = $_POST['pwd'];
    $role = "STUDENT";

    $sql = "INSERT INTO User (FullName, Email, Password, Role, Contact) VALUES ('{$user}', '{$email}', '{$pwd}', '{$role}', '{$contact}')";
    if ($conn->query($sql) === TRUE) {
        echo "User registerd successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>