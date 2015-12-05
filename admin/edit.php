<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL & ~E_NOTICE);
include_once "admin_header.php";
$event_id = $_POST['event_id'];
$event_id = mysqli_real_escape_string($conn, $event_id);
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
    <h5>
        <?php
        if ($event_id != "") {
            $sql = "SELECT  e.event_id,
                    t.event_type_code,
                    t.event_type_name,
                    DATE_FORMAT(e.start_date, '%Y-%m-%dT%H:%i') start_date,
                    e.short_desc,
                    e.long_desc,
                    e.event_url,
                    e.location
            from    events e,
                    event_types t
            where   e.event_type_code = t.event_type_code
            and     e.event_id = " . $event_id;

            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
        }
        ?>

        <form role="form" method="post" action="save.php">
            <input type="hidden" class="form-control" name="event_id" value="<?php echo $row['event_id']; ?>">

            <div class="form-group">
                <label for="short_desc">Short Event Description:</label>
                <input type="text" class="form-control" name="short_desc" id="short_desc" maxlength="100" style="width: 400px;"
                       value="<?php echo $row['short_desc']; ?>" required>
            </div>

            <div class="form-group">
                <label for="event_type">Event Type:</label>
                <select class="form-control" name="event_type" id="event_type" style="width: 200px;">
                    <?php
                    $sql2 = "SELECT event_type_code, event_type_name from event_types order by event_type_name";
                    $result2 = $conn->query($sql2);

                    if ($result2->num_rows > 0) {
                        while ($row2 = $result2->fetch_assoc()) {
                            echo "<option value='" . $row2[event_type_code] . "'";
                            if ($row[event_type_code] == $row2[event_type_code]) {
                                echo " selected='selected'";
                            }
                            echo ">" . $row2[event_type_name] . "</option>";
                        }
                        $conn->close();
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="long_desc">Details:</label>
                <textarea class="form-control" rows="10"
                          name="long_desc" id="long_desc" required><?php echo $row['long_desc']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" id="location" maxlength="100" style="width: 700px;"
                       value="<?php echo $row['location']; ?>" required>
            </div>

            <div class="form-group">
                <label for="start_datetime">Start Date and Time</label>
                <input type="datetime-local" class="form-control" name="start_datetime" id="start_datetime" style="width: 250px;"
                       value="<?php echo $row['start_date']; ?>" required>
                <?php
                if (!strpos($_SERVER["HTTP_USER_AGENT"], 'Chrome')) {
                    echo "<small>Use the format YYYY-MM-DDTHH:MM (like 2015-10-06T00:00) or use the Chrome Browser for a Date Picker</small>";
                }
                ?>
            </div>

            <div class="form-group">
                <label for="url">URL for More Information:</label>
                <input type="url" class="form-control" name="url" id="url" maxlength="100" style="width: 700px;"
                       value="<?php echo $row['event_url']; ?>">
            </div>

            <input type="submit" class="btn btn-primary btn-lg" value="Save">

        </form>
        <center><a href="admin.php">Return to Main Admin Screen</a></center>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </h5>
    <br><br><br>
</div>
</body>
</html>