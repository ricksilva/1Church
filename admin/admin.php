<!-- ?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
? -->
<html>
<?php
include_once "admin_header.php";
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

    <table class="table table-striped table-hover">
        <tr>
            <th>Edit</th>
            <th>Event</th>
            <th>Location</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
        <?php
        $sql = "SELECT  event_id,
                            event_type_code,
                            date_format(start_date,'%m/%d/%Y') start_date,
                            date_format(start_date,'%h:%i %p') start_time,
                            if (start_date < CURDATE(),'(past)','') as past_text,
                            short_desc,
                            long_desc,
                            event_url,
                            location
                            from events
                order by start_date desc";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row[start_time] == '12:00 AM') {
                    $display_date = $row[start_date];
                } else {
                    $display_date = $row[start_date] . " " . $row[start_time];
                }
                echo "<tr><td>" .
                    "<form name='editEvent' method='post' action='edit.php'>" .
                    "<input type='hidden' name='event_id' value='" . $row[event_id] . "'/>" .
                    "<button type='submit' style='border:none; background: transparent;'><span class='glyphicon glyphicon-edit'></span></button>" .
                    "</form></td>" .
                    "<td class='col-lg-4 col-md-4'>" . $row[short_desc] . "</a></td>" .
                    "<td class='col-lg-3 col-md-3'>" . $row[location] . "</td>" .
                    "<td class='col-lg-3 col-md-3'>" . $display_date . " " . $row[past_text] . "</td>" .
                    "<td class='col-lg-1 col-md-1'>" .
                    "<form name='deleteEvent' method='post' action='delete.php'>" .
                    "<input type='hidden' name='event_id' value='" . $row[event_id] . "'/>" .
                    "<button type='submit' style='border:none; background: transparent;'><span class='glyphicon glyphicon-remove'></span></button>" .
                    "</form>" .
                    "</td>";
            }
        } else {
            echo "<tr><td colspan='5' align='center'>No Results</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>
</body>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
