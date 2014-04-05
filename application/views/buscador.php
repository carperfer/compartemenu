<!DOCTYPE html>
<html lang="es">
<?php $this->load->view('header'); ?>
  <body>
    <?php $this->load->view('menu'); ?>


    <div class="container-flex">

      <div class="col-sm-4">
      	
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   <script>
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
// The maximum width of the info window is set to 200 pixels.

function initialize() {
  var myLatlng = new google.maps.LatLng(37.395391,-5.992369);
  var mapOptions = {
    zoom: 13,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<p>Federico López<p><table class="table table-condensed"><tbody><tr class="active"><td><strong>Sábado 5 Abril</strong></td><td>21:00</td></tr><tr class="danger"><td>Potaje de Garbanzos</td><td>Filete de pollo</td></tr><tr class="success"><td>Refresco Agua</td><td>Flan</td></tr><tr class="warning"><td><strong>Idioma:</strong></td><td>Español Frances</td></tr></tbody></table>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 200
  });

  var marker = new google.maps.Marker({
      position: new google.maps.LatLng(37.391164,-6.00045),
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  
  var marker1 = new google.maps.Marker({
      position: new google.maps.LatLng(37.388436,-5.991696),
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow.open(map,marker1);
  });
  
  var marker2 = new google.maps.Marker({
      position: new google.maps.LatLng(37.396755,-5.987232),
      map: map,
      title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker2, 'click', function() {
    infowindow.open(map,marker2);
  });
}

function marca(){
	infowindow.open(map,marker2);
	return false;
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    
    <div id="map-canvas" style="height: 600px"></div>

      </div>
	  <div class="col-sm-8">
	  	<div class="row well">
	  		<h2>Sevilla</h2>
	  		<form role="form" class="">
				<div class="form-group col-xs-4">
					 <label for="exampleInputEmail1">Barrio</label><br>
					 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Triana, Centro, Nervión" />
				</div>
				<div class="form-group col-xs-4">
					 <label for="exampleInputPassword1">Comida</label><br>
					 <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Pizza, Macarrones..."/>
				</div>
				<div class="form-group col-xs-4">
						<br>
					 <button type="submit" class="btn btn-default">Buscar</button>
				</div>
			</form>
	  	</div>
	  	
	  	
	  	<div class="col-sm-12 well row">
	  		<div class="col-sm-2">
	  			<img alt="300x200" src="http://lorempixel.com/100/101/people/10/" class="img-responsive" />
	  		</div>
	  		<div class="col-sm-3">
	  				<h3><a href="/comidas/ficha">Miriam González</a></h3>
	  				<p><img src="http://daveexaminesmovies.files.wordpress.com/2008/02/5-star_rating_system_pcar_01-e1349540653866.png" class="img-responsive"></p>
	  				<p><a href="#" onclick="marca();">Calle Moscú, 3, 5º A</a></p>
	  		</div>
	  		<div class="col-sm-7">
	  			<div class="col-md-9"><strong>Sábado 5 Abril</strong> 14:00</div>
	  			<div class="col-sm-3">4,5€</div>
	  			<div class="col-sm-12">3 plazas libres, van 2</div>
	  			<br><br>
	  			<table class="table table-condensed">
				<tbody>
					<tr class="">
						<td>
							Verduras salteadas
						</td>
						<td>
							Lenguado a la plancha
						</td>
					</tr>
					<tr class="active">
						<td>
							Refrescos Agua
						</td>
						<td>
							Fruta
						</td>
					</tr>
				</tbody>
			</table>
	  		</div>
	  	</div>
	  	
	  		  	<div class="col-sm-12 well row">
	  		  	
	  		<div class="col-sm-2">
	  			<img alt="300x200" src="http://lorempixel.com/100/101/people/7/" class="img-responsive" />
	  		</div>
	  		<div class="col-sm-3">
	  				<h3><a href="/comidas/ficha">Federico López</a></h3>
	  				<p><img src="http://daveexaminesmovies.files.wordpress.com/2008/02/5-star_rating_system_pcar_01-e1349540653866.png" class="img-responsive"></p>
	  				<p>Diego Angulo Iñiguez, 23, 2º C</p>
	  		</div>
	  		<div class="col-sm-7">
	  			<div class="col-md-9"><strong>Sábado 5 Abril</strong> 14:00</div>
	  			<div class="col-sm-3">4,5€</div>
	  			<div class="col-sm-12">3 plazas libres, van 2</div>
	  			<br><br>
	  			<table class="table table-condensed">
				<tbody>
					<tr class="">
						<td>
							Pollo con salteado de espinacas
						</td>
						<td>
							Atún con pisto
						</td>
					</tr>
					<tr class="">
						<td>
							Vino Agua
						</td>
						<td>
							Postre casero
						</td>
					</tr>
				</tbody>
			</table>
	  		</div>
	  	</div>
	  	
	  		  	<div class="col-sm-12 well row">
	  		<div class="col-sm-2">
	  			<img alt="300x200" src="http://lorempixel.com/100/101/people/2/" class="img-responsive" />
	  		</div>
	  		<div class="col-sm-3">
	  				<h3><a href="/comidas/ficha">Cristina Lora</a></h3>
	  				<p><img src="http://daveexaminesmovies.files.wordpress.com/2008/02/5-star_rating_system_pcar_01-e1349540653866.png" class="img-responsive"></p>
	  				<p>Sierpes 25 Bajo</p>
	  		</div>
	  		<div class="col-sm-7">
	  			<div class="col-md-9"><strong>Sábado 5 Abril</strong> 14:00</div>
	  			<div class="col-sm-3">4,5€</div>
	  			<div class="col-sm-12">3 plazas libres, van 2</div>
	  			<br><br>
	  			<table class="table table-condensed">
				<tbody>
					<tr class="danger">
						<td>
							Potaje de Garbanzos
						</td>
						<td>
							Filete de pollo
						</td>
					</tr>
					<tr class="success">
						<td>
							Refresco Agua
						</td>
						<td>
							Flan
						</td>
					</tr>
				</tbody>
			</table>
	  		</div>
	  	</div>
	  	
	  </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
