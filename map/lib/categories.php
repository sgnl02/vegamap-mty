<?php
require 'connection.php';

$query = "SELECT * FROM categories";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
				<li>
					<a href=\"index.php?select=category&amp;selection=$row->id_categories\">
						$row->category
					</a>
				</li>
		";
		}

    $result->close();
}

/* close connection */
$mysqli->close();
?>
