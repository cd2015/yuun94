<?php
require("../includes/dbconnect.php");

// Gets data from URL parameters
$name = $_GET['name'];
$address = $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];
$category = $_GET['type'];

// Opens a connection to a MySQL server
$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Insert new row with user data
$query = sprintf("INSERT INTO businesslocation " .
         " (id, name, address, lat, lng, category ) " .
         " VALUES (NULL, '%s', '%s', '%s', '%s', '%s');",
         mysql_real_escape_string($name),
         mysql_real_escape_string($address),
         mysql_real_escape_string($lat),
         mysql_real_escape_string($lng),
         mysql_real_escape_string($category));

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}else{
	?>
	<div>
		<p><?php echo "Your Location for "; echo $name; echo " at "; echo $address; echo " has been successfully added";?></p>
		
		<!--<form >
			<input type="hidden" value="15" id="loc2Del" name="locid"></input>
			<input type="submit" value="Click to Change Your Location" onclick='changeLocation()'></input>
		</form>-->
		</div>
	<?php
}

?>
