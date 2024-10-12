<?php 
    include('connection.php');
    $id = $_POST['id'];
    $key = $_POST['key'];
    $value = $_POST['value'];

    $sql = "UPDATE Ticket SET {$key}='{$value}' WHERE ID={$id}";
    if ($conn->query($sql) === TRUE) {
        echo "Record update successfully";
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