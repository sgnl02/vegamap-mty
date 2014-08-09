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
    </style>
  </head>

  <body>

<div class="above">
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">VegaMap MTY<sup>0.1</sup></a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	      <ul class="nav navbar-nav">
					<li><a href="#" data-toggle="modal" data-target="#myModal">Agregar lugar</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tipo de comida <span class="caret"></span></a>

	          <ul class="dropdown-menu" role="menu">
							<?php require 'lib/categories.php'; ?>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
							<?php require 'lib/options.php'; ?>
	          </ul>
	        </li>
	      </ul>

	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Lugar" list="places">
						<datalist id="places">
							<?php require 'lib/places.php'; ?>
						</datalist>
	        </div>
	        <button type="submit" class="btn btn-default">Buscar</button>
	      </form>
				<ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" data-toggle="modal" data-target="#info">Info</a></li>
				</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

    <google-map latitude="25.6488126" longitude="-100.3030789" disableDefaultUI="false" fitToMarkers="true">	
		<?php require 'lib/map.php'; ?>
    </google-map>
		<!--
    <google-map-directions startAddress="San Francisco" endAddress="Mountain View"></google-map-directions>

    <script>
      var gmap = document.querySelector('google-map');
      gmap.addEventListener('api-load', function(e) {
        document.querySelector('google-map-directions').map = this.map;
      });
    </script>
		-->

		<?php require 'lib/add.php'; ?>
		<?php require 'lib/info.php'; ?>

		<script src="//code.jquery.com/jquery-1.9.0.min.js"></script>	
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
