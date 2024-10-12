<?php include('connection.php') ?>
<aside class="side-nav">
    <div class="nav-links">
        <a href="/help_desk/admin/tickets.php">
            <button class="nav-btn">
                <i class="fa-solid fa-ticket"></i> Tickets <?php 
                    $sql = "SELECT COUNT(*) AS count FROM Ticket WHERE Status = 'Open'";
                    $r = $conn->query($sql);
                    $d = $r->fetch_assoc();
                    if($d['count'] > 0) {
                        echo "<span class='badge'>{$d['count']}</span>";
                    }
                ?>
            </button>
        </a>
        <button class="nav-btn"><i class="fa-solid fa-user-group"></i> Support Agents</button>
        <button class="nav-btn"><i class="fa-solid fa-gear"></i> Settings</button>
    </div>

    <button class="log-out-btn">
        <i class="fa-solid fa-power-off"></i> Log Out
    </button>
</aside>