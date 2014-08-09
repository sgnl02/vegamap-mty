<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar lugar</h4>
      </div>

<!--Form-->
<form class="form-horizontal" role="form" action="insert.php" method="post">
			<div class="modal-body">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Nombre</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de lugar">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="address" class="col-sm-2 control-label">Direccion</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="address" name="address" placeholder="Calle y numero" rows="3"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="google-map-location" class="col-sm-2 control-label">Ubicacion</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" id="google-map-location" name="google-map-location" placeholder="Ubicacion en Google Map" rows="3"></textarea><br/>

						<div class="alert alert-warning fade in" role="alert">
  				    <span class="glyphicon glyphicon-map-marker"></span>
							<span class="glyphicon-class">
							Copia y pega
							<a href="https://www.google.com.mx/maps/@25.6882664,-100.3274548,12z" target="_blank">la ubicacion</a>
							de lugar.
							</span>
  				  </div>						
					</div>
			  </div>
			  <div class="form-group">
			    <label for="option" class="col-sm-2 control-label">Opciones</label>
			    <div class="col-sm-10">
						<select class="form-control" id="option" name="option">
							<?php include 'lib/add-cuisine.php'; ?>
						</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="category" class="col-sm-2 control-label">Tipo de comida</label>
			    <div class="col-sm-10">
						<select class="form-control" id="category" name="category">
							<?php include 'lib/add-categories.php'; ?>
						</select>
			    </div>
			  </div>
			</div>			

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
</form>

    </div>
  </div>
</div>
