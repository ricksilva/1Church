<?php
if (getenv('HTTP_HOST') == "localhost") {
    include("/Users/settings.php");
} else {
    include("/home5/backpos1/settings.php");
}
include_once "../db_conn.php";
?>
<!DOCTYPE html>
<head>
    <!--This meta tag prevents apostropes coming from the database from being displayed as question marks with black diamonds around them-->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/bootstrap-customized.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>