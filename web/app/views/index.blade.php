@extends('layouts.template')

@section('title')
	TIENDALINE
@stop

@section('banner')
	<script type="text/javascript">
		$(document).ready(function(e){
			$('.btn-one').addClass('active');
		});
	</script>
	<div class="container-banner">
		{{HTML::image("/img/tienda/bannerhome.jpg","bannner TiendaLine",array("class"=>""))}}
		<div class="content-banner-home">
				<div class="content-text-banner">
					<h1>Crea tu Propia Tienda On-line.</h1>
					<p>
						Ahora es más fácil y rápido vender tus productos a través de Internet.</br>
						Conoce nuestros planes.
					</p>
					<a href="#" class="btn-abrir-tienda">ABRE TU TIENDA AHORA</a>
					<a href="#" class="btn-ver-planes">VER PLANES</a>
				</div>
		</div>
		
	</div>
	<div class="container-banner-movil">
		{{HTML::image("/img/tienda/bannerhome-movil.jpg","bannner TiendaLine",array("class"=>""))}}
		
		<p class="presentation-home">
			Ahora es más fácil y rápido vender tus productos a través de Internet.
		</p>
	</div>

@stop 
@section('article')
	<div class="home-function">
		<h2 class="title-function">¿<span> Cómo </span> Funciona ?</h2>
		<ul>
			<li>
				{{HTML::image("img/tienda/img1-function.png","Crea tu cuenta",array("class"=>""))}}
				<h3>1. Crea tu cuenta </h3>
				<p>Poner en marcha tu tienda on-line es tan simple como llenar un formulario y activar una cuenta de usuario.</p>
			</li>
			<li>
				{{HTML::image("img/tienda/img2-function.png","Crea tu cuenta",array("class"=>""))}}
				<h3>2. Arma tu tienda</h3>
				<p>Elige el diseño para tu tienda y publica tus productos.</p>
			</li>
			<li>
				{{HTML::image("img/tienda/img3-function.png","Crea tu cuenta",array("class"=>""))}}
				<h3>3. Configura medios de pago</h3>
				<p>Puedes configurar fácilmente los medios de pago que permitirán a tus clientes realizar pagos on-line.</p>
			</li>

			
			<li>
				{{HTML::image("img/tienda/img4-function.png","Crea tu cuenta",array("class"=>""))}}
				<h3>4. Empieza a vender </h3>
				<p>¡Felicidades!. Ya estás listo para empezar a vender por Internet.</p>
			</li>
		</ul>
	</div>
	<div class="home-plan">
		<h2  class="title-plan"><span>Conoce Nuestros</span> PLANES</h2>
		<p class="intro-home-plan">Hemos diseñado un plan para cada necesidad, elige el tuyo y comienza hoy mismo.</p>

		<div id="content-plan">
			<div class="content-plan">
				<h3>Plan1</h3>
				<div class="precio">
					<div class="content-precio">
						<span class="simbol">$</span>
						<p class="diner-s"> 
							<span class="diner">35.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
						</p>
					</div>
					<p class="text-anticipo">O pagando el año anticipado <span style="color:#ff6800;">$ 29.900</span> mes</p>	
				</div>
				<p style="padding:15px 0 30px">
					Tu propio catálogo Web que te permite mostrar tus productos al mundo entero, permitiendo a los visitantes contactarte para adquirir tus productos.
				</p>
			</div>
			<a class="btn-p1-comprar" href="">ADQUIRIR</a>
		</div>	

		<div id="content-plan">
			<div class="content-plan plan-two">
				<h3>Plan2</h3>
				<div class="precio">
					<div class="content-precio">
						<span class="simbol">$</span>
						<p class="diner-s"> 
							<span class="diner">74.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
						</p>
					</div>
					<p class="text-anticipo">O pagando el año anticipado <span style="color:#ff6800;">$ 64.900</span> mes</p>	
				</div>
				<p style="padding:55px 10px 30px">
					Este plan ofrece las características más importantes que te permitirán vender tus productos a través de Internet.
				</p>
			</div>
			<a class="btn-p2-comprar" href="">ADQUIRIR</a>
		</div>	


		<div id="content-plan">
			<div class="content-plan">
				<h3>Plan3</h3>
				<div class="precio">
					<div class="content-precio">
						<span class="simbol">$</span>
						<p class="diner-s"> 
							<span class="diner">99.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
						</p>
					</div>
					<p class="text-anticipo">O pagando el año anticipado <span style="color:#ff6800;">$ 89.900</span> mes</p>	
				</div>
				<p style="padding:55px 10px 30px">
					Este plan te ofrece ventajas adicionales, como lo es tu propia app para Facebook, con lo que podrás llegar a más personas en todo el mundo.
				</p>
			</div>
			<a class="btn-p3-comprar" href="">ADQUIRIR</a>
		</div>	


		<div class="plan-personalizado">
			<h3>Plan <span>personalizado</span></h3>
			<div class="precio" style="padding:46px 0;">
				{{HTML::image("img/tienda/logo-opaco.png","plan personalizado",array("class"=>""))}}
			</div>
			<div class="precio" style="padding:40px 0;">
				<p class="text-personal" style="padding:0px 10px 0px;">
					Si lo que necesitas es un diseño personalizado y funcionalidades específicas adaptadas a los requerimientos de tu negocio, esta es la opción ideal para tí.
				</p>
			</div>
			
			<div class="precio" style="padding:30px 0; border-top:none;">
					<a class="btn-contact-home" href="">CONTACTAR</a>
			</div>	
		</div>



	</div>
	<div class="intro-clients-home">
		{{HTML::image("img/tienda/img-clientes-home.png","",array("class"=>"cliente-home"))}}
		<p  style="text-align:center;">Estas son algunas de las empresas que ya cuentan con nuestro servicio:</p>
	</div>
	@section('clientes')
		<div id="container-clientes-home">
			<ul>
				<li>
					<a href="">
						{{HTML::image("img/tienda/cliente-vibram.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="#" class="client">Vibram</a>
				</li>
				<li>
					<a href="">
						{{HTML::image("img/tienda/cliente-outlet.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="#" class="client">Outlet Optico</a>
				</li>
				<li>
					<a href="">
						{{HTML::image("img/tienda/cliente-canaima.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="#" class="client">Canaima Adventure</a>
				</li>
				<li>
					<a href="">
						{{HTML::image("img/tienda/cliente-areavial.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="#" class="client">Area Vial</a>
				</li>
				<li>
					<a href="">
						{{HTML::image("img/tienda/cliente-magiafloral.png","",array("class"=>"cliente-home"))}}
						<div class="container-sobre">
							<p>VISITAR <br/> TIENDA</p>
						</div>
					</a>
					<a href="#" class="client">Magia Floral</a>
				</li>
			</ul>
		</div>
	@stop
	
@stop
