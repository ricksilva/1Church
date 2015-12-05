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
    <table class="table table-striped table-hover">
        <?php if ($event_type != "") { ?>
            <tr>
                <th>Event</th>
                <th>Location</th>
                <th>Date</th>
            </tr>
        <?php } ?>
        <?php
        $sqldyn = "";
        if ($event_type != "") {
            if ($event_type == "A") { // A = All
                $sqldyn = " ";
            } else {
                $sqldyn = " and event_type_code = '" . $event_type . "'";
            }

            $sql = "SELECT  event_id,
                            event_type_code,
                            date_format(start_date,'%m/%d/%Y') start_date,
                            date_format(start_date,'%h:%i %p') start_time,
                            short_desc,
                            long_desc,
                            event_url,
                            location
                            from events" .
                " where start_date >= CURDATE()" .
                $sqldyn .
                " order by start_date";

            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row[start_time] == '12:00 AM') {
                        $display_date = $row[start_date];
                    } else {
                        $display_date = $row[start_date] . " " . $row[start_time];
                    }

                    echo "<tr><td>" . "<a href='details.php?event_type=" . $event_type . "&event_id=" . $row[event_id] . "'>" . $row[short_desc] . "</a></td>" .
                        "<td>" . $row[location] . "</td>" .
                        "<td>" . $display_date . "</td>" . "</tr>";

                }
            } else {
                echo "<tr><td colspan='3' align='center'>No Results</td></tr>";
            }
            $conn->close();
        } else {
            ?>
            <tr>
                <td style="background-color: white;"><strong>1Church is a site where Christians in the Raleigh, North Carolina area can share church events with
                    the rest of the community. Just Click a button above to see Christian events in your area of
                    interest (Family, Finance, etc.)</strong>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
