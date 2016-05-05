<?php

session_start();

include 'common.php';

$to = $_REQUEST['to'];
$from = $_REQUEST['from'];

initDB();

$query_string = "select * from flights where from_city = '$from' and to_city = '$to'";
$result = mysql_query($query_string);
$value = mysql_fetch_row($result);

if($value == null){
 	echo "there is no matching flight, try something else"; 
}

else{

	
printHeader("Search Flights");
?>
    <form action="">
        <h3>From: <?php print($value[1])?></h3>
        <h3>To: <?php print($value[2])?></h3>
        <h3>Price: $<?php print($value[3])?></h3>

        <input type="checkbox" value="Child" name="child">
        <!-- Feel free to change according to our layout -->
        <p>Child</p> <br>
        <input type="checkbox" value="Wheelchair" name="wheelchair">
        <p>Wheelchair</p> <br>
        <input type="checkbox" value="Special Diet" name="specialdiet">
        <p>Special Diet</p> <br>

        <p>Seats Selected:  </p>

        <input type="hidden" name="from" value="<?php echo $from; ?>" />
        <input type="hidden" name="to" value="<?php echo $to; ?>" />
        <input type="submit" value="Add to Booking" name="submit">
    </form>
<?php
	}

if (isset($_GET['submit'])) {


	if(isset($_GET['child']) || isset($_GET['wheelchair']) || isset($_GET['specialdiet'])) {

		header("Location:bookings.php");

} else {
		echo "You have to select at least one seat";
	}

}
printFooter();
?>

