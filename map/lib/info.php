<div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Informacion</h4>
      </div>
      <div class="modal-body">
				<?php
					require 'connection.php';
					
					if ($result = $mysqli->query("SELECT `name` FROM places")) {
						echo '<div class="alert alert-info" role="alert">Hay ' . $result->num_rows . ' lugares.</div>';
					}
					
					$mysqli->close();
				?>
				<h4>Version de prueba</h4>

				<ul>
					<li>0.01 Nacimiento.</li>
					<li>0.02 El men&uacute;.</li>
					<li>0.03 Los iconos del mapa.</li>
				</ul>

				<h4>Problemas?</h4>

				<p>
				Enviar un correo: <em>admin [arroba] stefanjonker [punto] nl</em>.
				</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
