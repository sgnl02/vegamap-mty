<?php
require 'connection.php';

/* Only select categories that are added to the map */

$query = "SELECT DISTINCT `id_categories`, `category` 
	FROM `places` 
	LEFT JOIN categories 
	ON places.id_category = categories.id_categories 
	ORDER BY `category`";

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
