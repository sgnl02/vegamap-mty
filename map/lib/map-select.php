<?php
require 'connection.php';

/* Needs cleaning and merging */

if(isset($category_id)
&& !empty($category_id)) {
	$query = "SELECT * 
		FROM places 
		LEFT JOIN categories 
		ON places.id_category = categories.id_categories
		LEFT JOIN options 
		ON places.id_option = options.id_options
		WHERE id_categories = '" . $category_id . "'
		";
}

if(isset($option_id)
&& !empty($option_id)) {
	$query = "SELECT * 
		FROM places 
		LEFT JOIN categories 
		ON places.id_category = categories.id_categories
		LEFT JOIN options 
		ON places.id_option = options.id_options
		WHERE id_options = '" . $option_id . "'
		";
}

if(isset($place_id)
&& !empty($place_id)) {
	$query = "SELECT * 
		FROM places 
		LEFT JOIN categories 
		ON places.id_category = categories.id_categories
		LEFT JOIN options 
		ON places.id_option = options.id_options
		WHERE id_places = '" . $place_id . "'
		";
}

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
					category=\"$row->id_category\"
					option=\"$row->option\"
				>
				$row->name
				</google-map-marker>
		";
		}

    $result->close();
}

if ($_GET['jaime'] === 'casa') {
	echo '
		<google-map-marker latitude="38.2987575" longitude="141.4178581"
												 title="The house of Jaime" draggable="true"
												icon="../images/cat_mapicon.png"
		>
	';
}

/* close connection */
$mysqli->close();
?>
