<!DOCTYPE html>
<html lang="es">
  <?php $this->load->view('header') ?>

  <body class="inicio">
	<?php $this->load->view('menu') ?>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <div class="container">
    	  <script>
  $(function() {
    $( "#fechaMenu" ).datepicker();
  });
  </script>
    	<script>
  $(function() {
    var availableTags = [
      	"Sabadell",
		"Salamanca",
		"San Sebastián",
		"Santa Cruz de Tenerife",
		"Santander",
		"Santiago de Compostela",
		"Segovia",
		"Sevilla",
    ];
    $( "#ciudadMenu" ).autocomplete({
      source: availableTags
    });
  });
  </script>
		<h1 class="text-center">
			Tu anfitri&oacute;n te espera... Búsca tu menú
		</h1>
    <div class="col-md-10 col-md-offset-1 column well row">
		<form role="form" class="form" action="/comidas/buscador" method="post">
			<div class="form-group col-sm-6">
				<label for="ciudadMenu">¿D&oacute;nde?</label></br>
				<input type="text" class="form-control" id="ciudadMenu" placeholder="Sevilla, Madrid, Valencia..." />
			</div>
			<div class="form-group col-sm-3">
				<label for="fechaMenu">¿Cu&aacute;ndo?</label></br>
				<input type="text" class="form-control" id="fechaMenu" placeholder="dd/mm/aaaa" />
			</div>
			<div class="checkbox form-group col-sm-3">
				<button type="submit" class="btn btn-default" style="height: 52px;">Buscar men&uacute;</button>
			</div>		
		</form>
	</div>
	
	<div class="row col-md-12 well" style="margin-top:72px;">
		<div class="col-md-4 column">
			<h2>
				Anfitrión
			</h2>
			<p>
				¿Quieres compartir tu mesa con otras personas?
			</p>
			<div>
				Comparte la comida que elaboras a diario con otras personas, podrás conocer a gente interesante a la vez que ahorras.
			</div>
			
			<p>
				<a class="btn" href="#"><span>Da de alta hoy tu menú casero.</span></a>
			</p>
		</div>
		<div class="col-md-4 column">
			<h2>
				Comensales
			</h2>
			<p>
				¿Te gusta la comida casera?
			</p>
			<div>
				Encuentra ahora tu menú elaborado en casa de nuestros anfitriones, podrás ahorra dinero, compartir experiencia con otros comensales ...
			</div>
			
			
			<p>
				<a class="btn" href="#">Busca menú en tu ciudad</a>
			</p>
		</div>
		<div class="col-md-4 column">
			<img alt="140x140" src="http://lorempixel.com/100/101/people/7/" class="img-responsive img-circle" />
			<blockquote>
				<p>
					Ahora que estoy lejos de casa, disfruto de comida casera a la vez que conozco nuevos amigos.
				</p> <small>Federico López <cite>@fede_lopez01</cite></small>
			</blockquote>
		</div>
	</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
