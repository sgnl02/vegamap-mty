<?php
require 'connection.php';

$query = "SELECT * FROM options";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
				<li>
					<a href=\"index.php?select=option&amp;selection=$row->id_options\">
						$row->option
					</a>
				</li>
		";
		}

    $result->close();
}

$mysqli->close();
?>
