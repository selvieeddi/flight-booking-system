<html>
<head>
    <title></title>
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
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="bookings.php">Your Bookings</a></li>
                <li><a href="flights.php">Search Flights</a></li>
            </ul>
        </div>
    </nav>
    
    <?php
    session_start();
    echo $_SESSION["to"];
    ?>

</body>
</html>