<?php
require 'lib/connection.php';

$query = "SELECT * 
	FROM places 
	LEFT JOIN categories 
	ON places.id_category = categories.id_categories
	LEFT JOIN options 
	ON places.id_option = options.id_options
	";

if ($result = $mysqli->query($query)) {
		$i=0;

		echo "[";

		while($row = $result->fetch_object()) {
			echo "
<pre>
	{
		\"latitude\":\"$row->latitude\"
		, \"longitude\":\"$row->longitude\" 
		, \"name\":\"$row->name\" 
		, \"icon\":\"$row->icon_categories-$row->icon_options.png\"
		, \"category\":\"$row->category\"
		, \"option\":\"$row->option\"
</pre>";

			if($i >= 0) {
				echo "},";
			} else {
				echo "}";
			}

			$i++;
		}

		echo "]";

    $result->close();
}

$mysqli->close();
?>
