@extends('layouts.template')
@section('title')
	COMO FUNCIONA TIENDALINE
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
	<h2 class="title-function" style="margin:70px auto;">BENEFICIOS</h2>
	<ul class="list-beneficios">
		<li>
			
			<h3>{{HTML::image("img/tienda/beneficio1.png","Elige el diseño",array("class"=>""))}} Elige el diseño</h3>
			<p>Puedes seleccionar la plantilla que desees, y adaptarla a la identidad corporativa de tu negocio.</p>
		</li>
		<li>
			<h3>{{HTML::image("img/tienda/beneficio2.png","Fácil de administrar",array("class"=>""))}} Fácil de administrar</h3>
			<p>Puedes administrar fácilmente tu propia tienda virtual.</p>
		</li>
		<li>
			<h3>{{HTML::image("img/tienda/beneficio3.png","En todos los dispositivos",array("class"=>""))}} En todos los dispositivos</h3>
			<p>Tu tienda on-line se verá bien tanto en smartphones como en tablets y computadores de escritorio.</p>
		</li>
		<li>
			<h3>{{HTML::image("img/tienda/beneficio4.png","Un precio justo",array("class"=>""))}} Un precio justo</h3>
			<p>	Porque las ventas on-line son una oportunidad para todos, hemos desarrollado planes para todo tipo de empresa, 
				desde las más pequeñas hasta las más grandes.
			</p>
		</li>
	</ul>
@stop