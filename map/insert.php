<?php 
header('Location: index.php');

if(
isset($_POST['name'])
&& !empty($_POST['name'])

&& isset($_POST['google-map-location'])
&& !empty($_POST['google-map-location'])

&& isset($_POST['category'])
&& !empty($_POST['category'])

&& isset($_POST['option'])
&& !empty($_POST['option'])

&& isset($_POST['address'])
&& !empty($_POST['address'])
) {
require 'lib/connection.php';

$latitudeReg = preg_match("/(@)[0-9]{0,}(\.)[0-9]{0,}/i", $_POST['google-map-location'], $latitudeMatch);
$latitudeReg = preg_match("/(-)[0-9]{0,}(\.)[0-9]{0,}/i", $_POST['google-map-location'], $longitudeMatch);

$name = $mysqli->real_escape_string($_POST['name']);
$latitude = $mysqli->real_escape_string(substr($latitudeMatch[0], 1));		// Cut off the @-sign
$longitude = $mysqli->real_escape_string($longitudeMatch[0]);
$id_category = $mysqli->real_escape_string($_POST['category']);
$id_option = $mysqli->real_escape_string($_POST['option']);
$address = $mysqli->real_escape_string($_POST['address']);

//var_dump($name);
//var_dump($latitude);
//var_dump($longitude);
//var_dump($id_category);
//var_dump($id_option);
//var_dump($address);

mysqli_query(
$mysqli
,"INSERT INTO `places`
	(`name`, `latitude`, `longitude`, `id_category`, `id_option`, `address`)
	VALUES 
	('$name', '$latitude', '$longitude', '$id_category', '$id_option', '$address')
") 
	or die(mysqli_error($mysqli));
}
?>
