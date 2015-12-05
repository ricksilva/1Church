<!-- ?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
? -->
<html>
<?php
include_once "header.php";
?>
<div class="container">
    <?php
    $sql = "SELECT  event_id,
                    event_type_name,
                    date_format(start_date,'%m/%d/%Y') start_date,
                    date_format(start_date,'%h:%i %p') start_time,
                    short_desc,
                    long_desc,
                    event_url,
                    location
            from    events e,
                    event_types t
            where   e.event_type_code = t.event_type_code
            and     event_id = " . $event_id;

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row[start_time] == '12:00 AM') {
                $display_date = $row[start_date];
            } else {
                $display_date = $row[start_date] . " " . $row[start_time];
            }
            echo "<table class='table table-striped'>";
            echo "<tr><th>Date: </th><td>" . $display_date . "</td></tr>";
            echo "<tr><th>Description: </th><td>" . $row["short_desc"] . "</td></tr>";
            echo "<tr><th>Details: </th><td>" . nl2br($row["long_desc"]) . "</td></tr>";
            echo "<tr><th>Location: </th><td>" . $row["location"] . "</td></tr>";
            echo "<tr><th>More Details: </th><td><a href=\"" . $row["event_url"] . "\">" . $row["event_url"] . "</a></td></tr>";
            echo "</table>";
        }
    }
    $conn->close();
    ?>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <br><br><br>
</div>
</body>
</html>
