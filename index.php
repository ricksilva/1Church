<?php
error_reporting(E_ALL);
?>
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
$sqldyn = "";
if (isset($_GET['e'])) {
  $sqldyn = " where event_type_code = '" . $_GET['e'] . "'";
  $conn = mysqli_connect('mysql.siteserver.net', 'ricksilva', 'xxxxxxx', 'xxxxxx');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT event_id, event_type_code, start_date, short_desc, long_desc, event_url, location from events" . $sqldyn . " order by start_date desc";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<div class=\"row\">";
          echo "<div class=\"text-box col-md-offset-1 col-md-10>\"";
          echo "<p><a href=\"/details.php?e=" . $row["event_id"] . "\">" . $row["short_desc"] . "</a>" . "<br>" . $row["location"] . "</p>";
          echo "</div></div>";
        }
      } else {
        echo "<div class=\"row\">";
        echo "<div class=\"text-box col-md-offset-1 col-md-10>\"";
        echo "<p>0 results" . "</p>";
        echo "</div></div>";
      }
      $conn->close();
}
?>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.main.js"></script>
</body>
</html>
