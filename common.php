<?php

define('DB_HOST', 'rerun');
define('DB_USER', 'potiro');
define('DB_PASS', 'pcXZb(kL');
define('DB_NAME', 'poti');

function printHeader($currentPage)
{
	echo '
		<html>
		<head>
			<title>' . $currentPage . '</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/main.css" rel="stylesheet">
		</head>
		<body> 
			<nav class="navbar navbar-inverse navbar-static-top navbar-custom">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Online Travel System</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li class="' . (($currentPage == 'Home') ? 'active' : '') . '"><a href="index.html">Home</a></li>
						<li class="' . (($currentPage == 'Your Bookings') ? 'active' : '') . '"><a href="bookings.php">Your Bookings</a></li>
						<li class="' . (($currentPage == 'Search Flights') ? 'active' : '') . '"><a href="flights.php">Search Flights</a></li>
					</ul>
				</div>
			</nav>';
}

function printFooter()
{
	echo '
			</body>
		</html>';
}

function initDB()
{
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	if (!$link) {
		die("Could not connect to Server");
	}
	mysql_select_db(DB_NAME, $link);
}
