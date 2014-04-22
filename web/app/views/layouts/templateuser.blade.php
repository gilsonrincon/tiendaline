<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="tiendaline te ofrecemos planes para que puedas mostrar y vender los productos que desees"/>
		<meta name="keywords" content="tiendas virtuales, tiendaline, vender" />
		<meta name="robots" content="INDEX, FOLLOW">
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<title>
			@yield('title')
		</title>
		<!-- INCORPORAMOS LOS ARCHIVOS CSS-->
			{{HTML::style('/css/bootstrap.css')}}
			{{HTML::style('/css/user.css')}}
			{{HTML::style('/css/style.css')}}


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
					
					<a class="logo" href="/datos">
						{{HTML::image("/img/tienda/logo-blue.png","TiendaLine",array("class"=>"logo-blue"))}}
					</a>
					<div class="btn-movil">
						{{HTML::image("/img/tienda/btn-menu-movil-user.png","Menu TiendaLine",array("class"=>""))}}
					</div>
					<nav>
						<ul>
							<li class="btn-one">
								{{HTML::link("/","Mi Perfil",array("class"=>""))}}
							</li>
							<li class="btn-two">
									
								{{HTML::link("/planes","Mis Tiendas",array("class"=>""))}}
							</li>
							<li class="btn-three">
								{{HTML::link("/clientes","Videos Tutoriales",array("class"=>""))}}
							</li>
							<li class="btn-four">
								{{HTML::link("/beneficios","Necesito Ayuda con mi Tienda",array("class"=>""))}}
							</li>
						</ul>
					</nav>
					<div class="info-user-header">
						<p><span>{{HTML::image("/img/tienda/icon-user.png","",array("class"=>""))}}</span> jhonathan velasquez </p>
						<a class="btn-close" href="/">Cerrar Sesión</a>
					</div>
				</div>
			</header>

			<section>
				<article>
					@yield('article')
				</article>
				@yield('clientes')
				@yield('pagos')
			</section>
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