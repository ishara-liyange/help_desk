<?php include('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

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
            <section>
                <div class="d-flex gap-20">
                    <div class="number-card">
                        Open Tickets
                        <h2 class="text-center">
                            <?php 
                                $sql = "SELECT COUNT(*) AS count FROM Ticket WHERE Status = 'Open'";
                                $r = $conn->query($sql);
                                $d = $r->fetch_assoc();
                                echo $d['count'];
                            ?>
                        </h2>
                    </div>
                    <div class="number-card">
                        AVG Resolving Time
                        <h2 class="text-center">
                            <?php 
                                $sql = "SELECT AVG(TIMEDIFF(ResolvedTime, CreatedDate)) AS avg_resolve_time FROM Ticket WHERE Status = 'Resolved'";
                                $r = $conn->query($sql);
                                $d = $r->fetch_assoc();
                                echo $d['avg_resolve_time'] ?? 0 ."h";
                            ?>
                        </h2>
                    </div>
                    <div class="number-card">
                        Ticket Resolved
                        <h2 class="text-center">
                            <?php 
                                $sql = "SELECT COUNT(*) AS count FROM Ticket WHERE Status = 'Resolved'";
                                $r = $conn->query($sql);
                                $d = $r->fetch_assoc();
                                echo $d['count'];
                            ?>
                        </h2>
                    </div>
                </div>
            </section>
            <section>

                <h3>Recent Tickets</h3>
                <div class="box">
                    <table>
                        <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>Priority</th>
                            <th>Status</th>
                        </tr>
                        <?php 
                            $sql = "SELECT * FROM Ticket ORDER BY ID DESC LIMIT 5";
                            $results = $conn->query($sql);
                            $priotity_map = array(
                                "Null" => "N/A",
                                "0" => "Low",
                                "1" => "Low",
                                "2" => "Medium",
                                "3" => "High",
                                "4" => "Urgent"
                            );
                            if($results->num_rows > 0) {
                                
                                while($row = $results->fetch_assoc()) {
                                echo "
                                    <tr>
                                        <td>{$row['ID']}</td>
                                        <td>{$row['Title']}</td>
                                        <td>{$priotity_map[$row['Priority']]}</td>
                                        <td>{$row['Status']}</td>
                                    </tr>
                                ";
                                }
                            } else {
                                echo "<h5>No result Found </h5>";
                            }
                        ?>
                    </table>
                </div>
            </section>
        </div>
    </div>

</body>

</html>