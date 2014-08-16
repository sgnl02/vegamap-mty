<!DOCTYPE html>
<!--
Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE.txt
The complete set of authors may be found at http://polymer.github.io/AUTHORS.txt
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS.txt
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS.txt
-->
<html lang="es">
  <head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VegaMap MTY</title>

    <script src="../platform/platform.js"></script>

    <link rel="import" href="google-map.html">
    <link rel="import" href="google-map-directions.html">

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
    <style>
      body, html {
        height: 100%;
        margin: 0;
				overflow-y: hidden;
      }
			.above {
				margin-bottom: -20px;
			}
      google-map {
        display: block;
        height: 100%;
      }
			input::-webkit-calendar-picker-indicator {
			  display: none;
			}
			.glyphicon-info-sign {
				font-size: 20px;
			}
			.form-select {
				padding-top: 8px;
			}
			.dropdown-select {
				border: 1px solid #cccccc;
				background-color: #ffffff;
				height: 30px;
				line-height: 30px;
			}
    </style>
  </head>

  <body>

<div class="above">
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

				<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-leaf"></span> VegaMap Monterrey<sup>0.3</sup></a>
	    </div>
	
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	      <ul class="nav navbar-nav">
					<li><a href="#" data-toggle="modal" data-target="#myModal">Agregar lugar</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tipo de comida <span class="caret"></span></a>

	          <ul class="dropdown-menu" role="menu" id="menu-categories">
							<?php require 'lib/categories.php'; ?>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
							<?php require 'lib/options.php'; ?>
	          </ul>
	        </li>

		      <li>
						<form class="form-select" action="index.php" method="post">
						<select class="dropdown-select" name="place">
						<?php require 'lib/places.php'; ?>
						</select>
	
						<button type="submit" class="btn btn-default">Mostrar</button>
						</form>
					</li>
	      </ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#info">Sobre</a></li>
				</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

    <google-map latitude="25.6488126" longitude="-100.3030789" disableDefaultUI="false" fitToMarkers="true">	
		<?php 
			if($_GET['select'] === 'category' && $_GET['selection']) {
				$category_id = $_GET['selection'];

				require (ctype_digit($category_id)) ? 'lib/map-select.php' : 'lib/map.php';
			} elseif($_GET['select'] === 'option' && $_GET['selection']) {
				$option_id = $_GET['selection'];

				require (ctype_digit($option_id)) ? 'lib/map-select.php' : 'lib/map.php';
			} elseif(ctype_digit($_POST['place'])){
				$place_id = $_POST['place'];

				require (ctype_digit($place_id)) ? 'lib/map-select.php' : 'lib/map.php';
			} else {
				require 'lib/map.php';	
			}
		?>	
    </google-map>

		<?php require 'lib/add.php'; ?>
		<?php require 'lib/info.php'; ?>

		<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>	
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body>
</html>
