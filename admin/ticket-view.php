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
            <a href="/help_desk/admin">
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
        <div class="d-flex w-full">
            <div class="outlet">
                <h3 class="margin-0">Ticket / T-<?php echo $_GET['id'] ?></h3>
                <?php 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM Ticket WHERE ID = {$id}";
                        $r = $conn->query($sql);
                        $d = $r->fetch_assoc();
                ?>
                <div class="box">
                    <h4 class="margin-0"><?php echo $d['Title']; ?></h4>
                    <p><?php echo $d['message']; ?></p>
                </div>
                <h4 class="margin-0">Activities</h4>
                <div class="box column gap-20">
                <?php 
                    $sql = "SELECT * FROM Comment WHERE TicketID = {$id}";
                    $results = $conn->query($sql);
                    $priotity_map = array(
                        "1" => "Low",
                        "2" => "Medium",
                        "3" => "High",
                        "4" => "Urgent"
                    );
                    if($results->num_rows > 0) {
                        while($row = $results->fetch_assoc()) {
                            $user_query = "SELECT * FROM User WHERE ID = {$row['UserID']}";
                            $r = $conn->query($user_query);
                            $user = $r->fetch_assoc();
                            echo "
                            <div class='ticket'>
                                <div class='d-flex gap-10'>
                                    <i class='fa-regular fa-user'></i>
                                    <div class='column gap-10'>
                                        <p class='margin-0'>{$user['FullName']}</p>
                                        <p class='margin-0 text-small'>{$row['Message']}</h4>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    } else {
                        echo "<h5>No result Found </h5>";
                    }
                ?>
                </div>
                <div class="box">
                    <form name="commentForm" method="POST" action="/help_desk/admin/add-comment.php" onsubmit="return validateCommentForm()">
                        <input type="hidden" name="ticket" value="<?php echo $_GET['id']; ?>">
                        <input type="hidden" name="user" value="1">
                        <textarea id="comment" name="comment" rows="4" cols="50" placeholder="Leave a comment..." require></textarea>
                        <p id="commentError" class="margin-0 text-red hidden">Comment is required</p>
                        <div class="d-flex flex-reverse w-full">
                            <button class="comment-btn">Comment</button>
                        </div>
                    </form>
                </div>
            </div>
            <aside class="ticket-options">
                <form id="ticket-view-form" method="POST" action="/help_desk/admin/update-ticket.php">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="column gap-20">
                    <div class="d-flex">
                        <div class="form-label"><label>Status</label></div>
                        <select name="Status" id="status">
                            <option value="Open" <?php if($d['Status'] == "Open") echo "selected" ?>>Open</option>
                            <option value="Assigned" <?php if($d['Status'] == "Assigned") echo "selected" ?>>Assigned</option>
                            <option value="Closed" <?php if($d['Status'] == "Closed") echo "selected" ?>>Closed</option>
                        </select>
                    </div>
                    <div class="d-flex">
                        <div class="form-label"><label for="priority">Priority</label></div>
                        <select name="Priority" id="priority">
                            <option value="1" <?php if($d['Priority'] == "1") echo "selected" ?>>Low</option>
                            <option value="2" <?php if($d['Priority'] == "2") echo "selected" ?>>Medium</option>
                            <option value="3" <?php if($d['Priority'] == "3") echo "selected" ?>>High</option>
                            <option value="4" <?php if($d['Priority'] == "4") echo "selected" ?>>Urgent</option>
                        </select>
                    </div>
                    <div class="d-flex">
                        <div class="form-label"><label for="assignee">Assignee</label></div>
                        <select name="Assignee" id="assignee">
                            <option value="0012">Lahiru</option>
                            <option value="2309">Danushi</option>
                        </select>
                    </div>
                    <div class="d-flex">
                        <div class="form-label"><label for="start-time">Start Time</label></div>
                        <p id="start-time" class="margin-0">07.00 PM</p>
                    </div>
                    <div class="d-flex">
                        <div class="form-label"><label for="start-time">Resolved Time</label></div>
                        <p id="start-time" class="margin-0">N/A</p>
                    </div>
                </div>
                </from>
            </aside>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>