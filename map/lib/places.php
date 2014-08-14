<?php
require 'connection.php';

$query = "SELECT `id_places`, `name` FROM places ORDER BY name";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
	      <option value=\"$row->id_places\">$row->name</option>
		";
		}

    $result->close();
}

/* close connection */
$mysqli->close();
?>
