<!DOCTYPE html>
<html lang="en">
<?php include('connection.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Help Desk Pro</title>
</head>

<body>
    <header>
        <div class="header">
            <a href="/admin/index.html">
                <div class="logo">
                    <img width="60" src="../img/logo.png" alt="">
                    <h3>Help Desk Pro</h3>
                </div>
            </a>
            <div class="profile">
                <img width="20" src="./img/icons/bell.png" alt="">
                <h4>Jone Doe</h4>
                <img width="35" src="../img/icons/user.png" alt="">
            </div>
        </div>
    </header>
    <div class="main-layout">
        <?php include("side-bar.php") ?>
        <div class="outlet">
            <h3 class="margin-0">Ticket List</h3>
            <div class="box d-flex gap-10">
                <input class="search" type="text" placeholder="Search...">
                <div>
                    <input type="checkbox" name="" id="open">
                    <label for="open">Open</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="closed">
                    <label for="closed">Closed</label>
                </div>
                <div>
                    <input type="checkbox" name="" id="assigned">
                    <label for="assigned">Assigned</label>
                </div>
            </div>
            <div class="box column gap-20">
            <?php 
                $sql = "SELECT * FROM Ticket ORDER BY ID DESC";
                $results = $conn->query($sql);
                $priotity_map = array(
                    "1" => "Low",
                    "2" => "Medium",
                    "3" => "High",
                    "4" => "Urgent"
                );
                if($results->num_rows > 0) {
                                
                    while($row = $results->fetch_assoc()) {
                        echo "
                            <a href='/help_desk/admin/ticket-view.php?id={$row['ID']}'> 
                                <div class='ticket'>
                                    <div class='d-flex gap-10'>
                                        <i class='fa-regular fa-user'></i>
                                        <div class='column gap-10'>
                                            <p class='margin-0'>{$row['FullName']}</p>
                                            <h4 class='margin-0'>{$row['Title']}</h4>
                                            <p class='margin-0'>{$row['CreatedDate']} | 14 Reply</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        ";
                    }
                } else {
                    echo "<h5>No result Found </h5>";
                }
            ?>
            </div>
        </div>
    </div>

</body>

</html>