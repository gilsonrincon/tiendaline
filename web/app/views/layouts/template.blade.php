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

	</head>
	<body>
		<div id="container-page">
			<header>
				
				<div id="container-header">
					<a class="logo" href="/">
						{{HTML::image("/img/tienda/logo.png","TiendaLine",array("class"=>"logo-img"))}}
					</a>
					<nav>
						<ul>
							<li>
								<a href="/">INICIO</a>
							</li>
							<li>
								<a href="/">PLANES</a>	
							</li>
							<li>
								<a href="/">CLIENTES</a>
							</li>
							<li>
								<a href="/">¿COMO FUNCIONA?</a>
							</li>
							<li>
								<a href="/">FAQ</a>
							</li>
							<li>
								<a href="/">PAGOS</a>
							</li>
							<li>
								<a href="/">CONTACTO</a>
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
			</section>
			<div id="invitacion-demo">
				<p>¿ Esta interesado  en  Adquirir  algunos de nuestros planes ? <span>Pruebe Nuestra tienda demo</span> <a href="#">Probar Demo</a></p>
			</div>
			<footer>
				<div class="container-footer">
					<h5>Sobre  TiendaLINE </h5>
					<ul>
						<li>
							<a href="#">Clientes</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
						<li>
							<a href="#">Pago</a>
						</li>
					</ul>
				</div>
				
			</footer>
		</div>
			
	</body>
</html>