<?php
require 'connection.php';

//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

$query = "SELECT `name` FROM places ORDER BY name";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
	      <option value=\"$row->name\">
		";
		}

    $result->close();
}

/* close connection */
$mysqli->close();
?>
