<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL & ~E_NOTICE);
include_once "admin_header.php";
$event_id = $_POST['event_id'];
$event_id = mysqli_real_escape_string($conn, $event_id);
?>
<html>
<head>
    <?php
    include_once "admin_header.php";
    ?>
    <div class="container">

        <div class="jumbotron">
            <title>1 Church Connect - Admin Screen</title>

            <div class="row">
                <h1>1 Church Connect</h1>

                <h3><font color="white">Admin Screen</font></h3>
                <br>
                <a href="edit.php" class="btn btn-primary btn-lg">Create a New Event</a>
            </div>
        </div>
    </div>
</head>
<body>
<div class="container">
    <h5>
        <br><br><br>
        <?php
        $sql = "SELECT short_desc from events where event_id = " . $event_id;
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $sqldel = "delete from events where event_id = " . $event_id;
            $resultdel = $conn->query($sqldel);
            $row = mysqli_fetch_assoc($result);
            echo "<div class='row'><div class='col-lg-12 col-md-12'><center><h4>\"" . $row["short_desc"] . "\" was deleted</h4></center></div></div>";
        }
        $conn->close();
        ?>
        <center><a href="admin.php">Return to Main Admin Screen</a></center>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </h5>
</div>
</body>
</html>
