<?php
require 'connection.php';

//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

$query = "SELECT * 
	FROM places 
	LEFT JOIN categories 
	ON places.id_category = categories.id
	LEFT JOIN options 
	ON places.id_option = options.id
	";

if ($result = $mysqli->query($query)) {

		while($row = $result->fetch_object()) {
			echo "
				<google-map-marker 
					latitude=\"$row->latitude\" 
					longitude=\"$row->longitude\" 
					title=\"$row->name\" 
					draggable=\"false\" 
					icon=\"../images/vegetarian_mapicon.png\"
					data-place-hidden=\"1\"
					category=\"$row->category\"
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
