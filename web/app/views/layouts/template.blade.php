<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content="" />
		<meta name="robots" content="INDEX, FOLLOW">
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<title>
			@yield('title')
		</title>
		<!-- INCORPORAMOS LOS ARCHIVOS CSS-->
			{{HTML::style('/css/bootstrap.css')}}
			{{HTML::style('/css/estilos.css')}}

		<!-- INCORPORAMOS LOS ARCHIVOS JS-->
			{{HTML::script('/js/jquery-1.10.2.min.js')}}	
	    
		<script type="text/javascript">
           $(document).ready(function(e){
           		$('.btn-movil').click(function() {
					/* Act on the event */
					$('nav').slideToggle('slow');
				});
           });

			
		</script>


	</head>
	<body>
		<div id="container-page">
			<header>
				
				<div id="container-header">
					<div class="btn-movil">
						{{HTML::image("/img/tienda/btn-menu-movil.png","Menu TiendaLine",array("class"=>""))}}
					</div>
					
					<a class="logo" href="/">
						{{HTML::image("/img/tienda/logo.png","TiendaLine",array("class"=>"logo-img"))}}
					</a>
					<nav>
						<ul>
							<li class="btn-one">
								<a  href="/">INICIO</a>
							</li>
							<li class="btn-two">
								<a href="planes">PLANES</a>	
							</li>
							<li class="btn-three">
								<a href="clientes">CLIENTES</a>
							</li>
							<li class="btn-four">
								<a href="beneficios">¿COMO FUNCIONA?</a>
							</li>
							<li class="btn-five">
								<a href="preguntas">FAQ</a>
							</li>
							<li class="btn-six">
								<a href="pagos">PAGOS</a>
							</li>
							<li class="btn-seven">
								<a href="contacto">CONTACTO</a>
							</li>

						</ul>
					</nav>
					<button class="btn-mitienda">
						MI TIENDA
					</button>
						
					
				</div>
			</header>

			<section>
				@yield('banner')
				<article>
					@yield('article')
				</article>
				@yield('clientes')
				@yield('pagos')
			</section>
			<div id="invitacion-demo">
				<p>¿ Esta interesado  en  Adquirir  algunos de nuestros planes ? <span>Pruebe Nuestra tienda demo</span> <a href="formulariodemo">Probar Demo</a></p>
			</div>
			<footer>
			    <div id="footer-lists">
					<div class="container-footer footer-movil">
						<ul>
							<li>
								<a href="mailto://info@tiendaline.com">info@tiendaline.com</a>
							</li>
							<!--
							<li>
								Tel. (+57 1) 805 0930
							</li>

							<li>
								Cll 79a No. 18 - 41 Of. 204 
							</li>
							-->
							<li>
								Medellin, Colombia
							</li>
							<li>
								 © TiendaLINE - Todos los derechos reservados. 
							</li>
						</ul>
						<p style="color:#c4c4c4; text-align:center; margin-top:20px;">
							Un servicio desarrollado por <a href="http://swm.com.co" target="_blank" rel="nofollow">Studioweb & Marketing</a>
						 </p>
					</div>
				</div>
			</footer>
		</div>
			
	</body>
</html>