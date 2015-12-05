<?php
if (getenv('HTTP_HOST') == "localhost") {
    include("/Users/settings.php");
} else {
    include("/home5/backpos1/settings.php");
}
include_once "db_conn.php";
$event_type = $_GET['event_type'];
$event_type = mysqli_real_escape_string($conn, $event_type);
$event_id = $_GET['event_id'];
$event_id = mysqli_real_escape_string($conn, $event_id);
?>
<!DOCTYPE html>
<head>
    <!--This meta tag prevents apostropes coming from the database from being displayed as question marks with black diamonds around them-->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap-customized.css">
</head>
<body>
<div class="container">

    <div class="jumbotron">
        <title>1 Church Connect</title>

        <div class="col-sm-2 col-xs-2"></div>
        <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
            <a href="/"><h1>1 Church Connect</h1></a>
            <p>Connecting God's One Church</p>
        </div>

        <ul class="nav nav-pills">
            <li
                <?php if ($event_type == "A") echo "class='active'"; ?>>
                <a href="index.php?event_type=A">All Events</a>
            </li>
            <li
                <?php if ($event_type == "F") echo "class='active'"; ?>>
                <a href="index.php?event_type=F">Family</a>
            </li>
            <li
                <?php if ($event_type == "P") echo "class='active'" ?>>
                <a href="index.php?event_type=P">Prayer</a>
            </li>
            <li
                <?php if ($event_type == "I") echo "class='active'" ?>>
                <a href="index.php?event_type=I">Finance</a>
            </li>
            <li
                <?php if ($event_type == "K") echo "class='active'" ?>>
                <a href="index.php?event_type=K">Kids</a>
            </li>
            <li
                <?php if ($event_type == "E") echo "class='active'" ?>>
                <a href="index.php?event_type=E">Evangelize</a>
            </li>
            <li
                <?php if ($event_type == "L") echo "class='active'" ?>>
                <a href="index.php?event_type=L">Leadership</a>
            </li>
            <li
                <?php if ($event_type == "O") echo "class='active'" ?>>
                <a href="index.php?event_type=O">Other</a>
            </li>
        </ul>
    </div>
</div>
