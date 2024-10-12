<?php

    require 'configTicketSubmission.php';

	$fullName = $_POST['FullName'];
    $title = $_POST['title'];
    $RegistrationNo = $_POST['RegistrationNo'];
    $ContactNo = $_POST['ContactNo'];
    $message = $_POST['message'];
    $Faculty = $_POST['Faculty'];
    $myfile = $_POST['myfile'];
    $email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','help_desk');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //create
		$stmt = $conn->prepare ("insert into Ticket(FullName, RegistrationNo, ContactNo, Faculty, email, title, message, myfile, Priority, Status)
        values(?, ?, ?, ?, ?, ?, ?, ?, 1, 'Open')");
		$stmt->bind_param("sisissss", $fullName, $RegistrationNo, $ContactNo, $Faculty, $email, $title, $message, $myfile);
		$execval = $stmt->execute();
		echo $execval;
		echo "<h1>Ticket Submission successfully...<h1>";
		$stmt->close();
		$conn->close();
	}
?>

