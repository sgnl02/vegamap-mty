<?php
require 'connection.php';

//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

$query = "SELECT `option` FROM options";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
	      <li><a href=\"#\" data-show-option=\"$row->option\"> $row->option </a></li>
		";
		}

    $result->close();
}

/* close connection */
$mysqli->close();
?>
