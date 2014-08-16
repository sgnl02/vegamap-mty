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

$name = mysql_real_escape_string($_POST['name']);
$latitude = mysql_real_escape_string(substr($latitudeMatch[0], 1));		// Cut off the @-sign
$longitude = mysql_real_escape_string($longitudeMatch[0]);
$id_category = mysql_real_escape_string($_POST['category']);
$id_option = mysql_real_escape_string($_POST['option']);
$address = mysql_real_escape_string($_POST['address']);

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
