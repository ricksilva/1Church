<html>
<?php
include_once "admin_header.php";
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL & ~E_NOTICE);
$event_id = $_POST['event_id'];
$event_id = mysqli_real_escape_string($conn,$event_id);
$short_desc = $_POST['short_desc'];
$short_desc = mysqli_real_escape_string($conn,$short_desc);
$long_desc = $_POST['long_desc'];
$long_desc = mysqli_real_escape_string($conn,$long_desc);
$event_type = $_POST['event_type'];
$event_type = mysqli_real_escape_string($conn,$event_type);
$location = $_POST['location'];
$location = mysqli_real_escape_string($conn,$location);
$start_datetime = $_POST['start_datetime'];
$start_datetime = mysqli_real_escape_string($conn,$start_datetime);
$url = $_POST['url'];
$url = mysqli_real_escape_string($conn,$url);
?>
<body>
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
        <p>
            <?php
            if ($event_id != "") {
                $sql = "update events " .
                    "set event_type_code = '" . $event_type . "'," .
                    "   start_date = '" . $start_datetime . "'," .
                    "   short_desc = '" . $short_desc . "'," .
                    "   long_desc = '" . $long_desc . "'," .
                    "   event_url = '" . $url . "'," .
                    "   location = '" . $location . "'" .
                    " where event_id = " . $event_id;


            } else {

                $sql = "insert into events (event_type_code, start_date, short_desc, long_desc, event_url, location) " .
                    "values ('" . $event_type . "','" . $start_datetime . "','" . $short_desc . "','" . $long_desc . "','" .$url . "','" . $location . "')";
            }
            if ($conn->query($sql) === TRUE) {
                echo "<h3 align='center'>Event \"" . $short_desc . "\" saved</h3>";
            } else {
                echo "Error saving event: " . $conn->error;
            }
            ?>
        </p>

        <center><a href="admin.php">Return to Main Admin Screen</a></center>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <br><br><br>
</div>
</body>
</html>