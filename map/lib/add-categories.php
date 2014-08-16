<?php
require 'connection.php';

//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

$query = "SELECT * FROM categories";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
	      <option value=\"$row->id_categories\"> $row->category </option>
		";
		}

    $result->close();
}

/* close connection */
$mysqli->close();
?>
