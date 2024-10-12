<?php 
    include('connection.php');
    $user = $_POST['user'];
    $comment = $_POST['comment'];
    $ticket = $_POST['ticket'];

    $sql = "INSERT INTO Comment (Message, UserID, TicketID) VALUES ('{$comment}', '{$user}', '{$ticket}')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<script> 
        setTimeout(() => {
            history.back();
            window.location.reload();
          }, 1000); 
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>