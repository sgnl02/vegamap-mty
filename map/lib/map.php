<?php
require 'connection.php';

$query = "SELECT * 
	FROM places 
	LEFT JOIN categories 
	ON places.id_category = categories.id_categories
	LEFT JOIN options 
	ON places.id_option = options.id_options
	";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
				<google-map-marker 
					latitude=\"$row->latitude\" 
					longitude=\"$row->longitude\" 
					title=\"$row->name\" 
					name=\"$row->id_places\" 
					draggable=\"false\" 
					icon=\"../images/$row->icon_categories-$row->icon_options.png\"
				>
				<strong>$row->name</strong>
				<p>$row->address</p>
				</google-map-marker>
		";
		}

    $result->close();
}

$mysqli->close();
?>
