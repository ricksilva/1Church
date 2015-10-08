<?php
error_reporting(E_ALL);
?>
<html>
<html>
<head>
  <title>1 Church Connect</title>
  <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicons/favicon-194x194.png" sizes="194x194">
  <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="favicons/manifest.json">
  <link rel="shortcut icon" href="favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
  			<div class="container">
  				<nav id="nav">
  					<div class="nav-drop">
  						<ul>
                <li><a href="/index.php?e=F">Family</a></li>
                <li><a href="/index.php?e=M">Missions</a></li>
                <li><a href="/index.php?e=I">Finance</a></li>
                <li><a href="/index.php?e=K">Kids</a></li>
                <li><a href="/index.php?e=E">Events</a></li>
                <li><a href="/index.php?e=G">Groups</a></li>
  						</ul>
            </div>  <!-- end of nav-drop -->
          </nav>
        </div> <!-- end of logo -->
      </div> <!-- end of container -->
    </div> <!-- end of first wrapper -->

  		<div class="container">
  			<div class="text-block">
  				<div class="heading-holder">
  					<h1>1 Church Connect</h1>
  				</div> <!-- end of heading-holder -->
  				<p class="tagline">Connecting God's One Church</p>
  			</div> <!-- end of text-block -->
  		</div>  <!-- end of container -->
<div id = "access">
<?php
if (isset($_GET['e'])) {
  $conn = mysqli_connect('mysql.siteserver.net', 'ricksilva', 'xxxxxxx', 'xxxxxxx');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT event_id, event_type_name, start_date,
   short_desc, long_desc, event_url, location from events e, event_types t
  where e.event_type_code = t.event_type_code
  and event_id = '" . $_GET['e'] . "'";

  $result = $conn->query($sql);

  echo "<h4><table>";
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<div class=\"row\">";
        echo "<div class=\"text-box col-md-offset-1 col-md-10\">";
          echo "<tr height=\"50\"><td width=\"10%\"><td>Event Type:</td><td>" . $row["event_type_name"] .  "</td><td><td width=\"10%\"></td></tr>" .
          "<tr height=\"50\"><td></td><td>Start Date:</td><td>" . $row["start_date"] . "</td></tr>" .
          "<tr height=\"50\"><td></td><td>Description:</td><td>" . $row["short_desc"] . "</td></tr>" .
          "<tr height=\"50\"><td></td><td>Details:</td><td>" . $row["long_desc"] . "</td></tr>" .
          "<tr height=\"50\"><td></td><td>Location:</td><td>" . $row["location"] . "</td></tr>" .
          "<tr height=\"50\"><td></td><td>More Details:</td><td><a href = \"" . $row["event_url"] . "\">" . $row["event_url"] . "</a></td></tr>";
          echo "</p></div></div>";
        }
        echo "</table></h4>";
      } else {
        echo "0 results";
      }
      $conn->close();
}
?>
</body>
</html>
