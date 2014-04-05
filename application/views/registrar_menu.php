<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('header'); ?>
  <body>
    <?php $this->load->view('menu'); ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-6 column">
			<form role="form">
				<div class="form-group">
					 <label for="name">Nombre</label><input type="text" class="form-control" id="name" />
				</div>
				<div class="form-group">
					 <label for="surname">Apellido</label><input type="text" class="form-control" id="surname" />
				</div>
				<div class="form-group">
					 <label for="email">Email address</label><input type="email" class="form-control" id="email" />
				</div>
				<div class="form-group">
					 <label for="password">Password</label><input type="password" class="form-control" id="password" />
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" /> Acepto las condiciones</label>
				</div> <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
		<div class="col-md-6 column">
			<h3>
				Condiciones del servicio
			</h3>
			<p>
				Los usuarios que se ofrezcan a compartir sus comidas, se comprometen a a cumplir todas las normativas actuales en materia de sanidad.
			</p>
			<div>
				Los usuarios elaborarán la comida que anuncien al precio fijado en el anuncio.
			</div>
			
			<div>
				Los comensales se comprometen a ser rigurosos con el horario, respetar al resto de comensales, así como la propia casa donde comen.
			</div>
		</div>
	</div>
</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
