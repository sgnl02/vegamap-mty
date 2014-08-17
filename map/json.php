<?php
require 'lib/connection.php';

$query = "SELECT * 
	FROM places 
	LEFT JOIN categories 
	ON places.id_category = categories.id_categories
	LEFT JOIN options 
	ON places.id_option = options.id_options
	";

/* Not using the latest PHP, yet. */

if ($result = $mysqli->query($query)) {
		$i=0;

		$json = "[";

		while($row = $result->fetch_object()) {
			$name = str_replace("\'", "'", $row->name);

			$json .= "
				{
					&quot;latitude&quot;:&quot;$row->latitude&quot;  
					, &quot;longitude&quot;:&quot;$row->longitude&quot; 
					, &quot;name&quot;:&quot;$name&quot; 
					, &quot;icon&quot;:&quot;$row->icon_categories-$row->icon_options.png&quot;
					, &quot;category&quot;:&quot;$row->category&quot;
					, &quot;option&quot;:&quot;$row->option&quot;
			";

			$json .= ($i >= 0 && $i+1 != $result->num_rows) ? "}," : "}";

			$i++;
		}
		
		$json .= "]";

    $result->close();
}

echo $json;

$mysqli->close();
?>
