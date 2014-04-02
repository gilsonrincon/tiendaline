@extends('layouts.template')
@section('title')
	CLIENTES TIENDALINE
@stop

@section('article')
	<script type="text/javascript">
		$(document).ready(function(e){
			$('.btn-three').addClass('active');
		});
	</script>
	<h2  class="title-plan"><span>Conoce Nuestros</span> CLIENTES</h2>
	<p class="intro-home-plan">Casos de éxito y testimonios de clientes satisfechos con el servicio de tiendaline</p>
	<div id="container-clientes-home" class="clientes-list-p" style="background:none;">
			<ul>
				<li>
					<a href="http://vibramfivefingers.com.co"  target="_blank">
						{{HTML::image("img/tienda/cliente-vibram.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="http://vibramfivefingers.com.co" class="client" target="_blank">Vibram</a>
				</li>
				<li>
					<a href="http://outletoptico.com" target="_blank">
						{{HTML::image("img/tienda/cliente-outlet.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="http://outletoptico.com" target="_blank" class="client">Outlet Optico</a>
				</li>
				<li>
					<a href="http://canaimaadventure.com" target="_blank">
						{{HTML::image("img/tienda/cliente-canaima.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="http://canaimaadventure.com" target="_blank" class="client">Canaima Adventure</a>
				</li>
				<li>
					<a href="http://areavial.com" target="_blank">
						{{HTML::image("img/tienda/cliente-areavial.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="http://areavial.com" target="_blank" class="client">Area Vial</a>
				</li>
				<li>
					<a href="http://magiafloral.com" target="_blank">
						{{HTML::image("img/tienda/cliente-magiafloral.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="http://magiafloral.com" target="_blank" class="client">Magia Floral</a>
				</li>
			</ul>
		</div>
@stop