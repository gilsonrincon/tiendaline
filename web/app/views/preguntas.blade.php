@extends('layouts.template')
@section('title')
	PREGUNTAS FRECUENTES TIENDALINE
@stop

@section('article')
	<h2  class="title-plan"><span>preguntas</span> FRECUENTES</h2>
	<ul class="list-questions">
		<li>
			<h3>¿Puedo recibir pagos con tarjetas de crédito a través de mi tienda virtual?</h3>
			<p>
				Si, proveemos la configuración de pasarelas de pago reconocidas a nivel mundial, con lo cual
			 	nuestros clientes pueden sentirse tranquilos a la hora de recibir pagos con tarjetas débito/crédito.
			 </p>	
		</li>
		<li>
			<h3>¿Necesito contratar a alguien para administrar mi tienda on-line?</h3>
			<p>
				No, nuestros clientes cuentan con una plataforma complétamente administrable, según las características de su plan, además, 
				ofrecemos tutoriales y documentación que harán más fácil la gestión del sitio.
			 </p>	
		</li>
		<li>
			<h3>¿Puedo solicitar funcionalidades adicionales a las que se encuentran descritas en las características de cada plan?</h3>
			<p>
				Si, nuestros clientes pueden solicitar el desarrollo de funcionalidades específicas según las características de 
				sus negocios, de igual forma, pueden solicitar un servicio adicional para personalizar el diseño del sitio y 
				adaptarlo a su identidad corporativa.
			 </p>	
		</li>
		<li>
			<h3>¿Cual es el periodo mínimo para la contratación del servicio?</h3>
			<p>
				Si deseas adquirir uno de nuestros planes, deberás hacerlo por un periodo mínimo de 4 meses; puedes realizar el 
				pago de forma mensual o hacerlo de forma anual (o por el total del periodo de contratación).
			 </p>	
		</li>
		<li>
			<h3>¿De qué manera ofrecen soporte o servicio al cliente?</h3>
			<p>
		
				Brindamos soporte a través de e-mail o por medio de skype.		
			 </p>	
		</li>
		<li>
			<h3>¿Ofrecen servicios de gestión de contenido?</h3>
			<p>
				Si usted requiere que montemos sus productos o realicemos cambios en el contenido de su sitio, no dudes en comunicarte
				con nosotros, con gusto te brindaremos un servicio integral que se adapte a tus necesidades.
			 </p>	
		</li>
		
	</ul>
	<h4>REALIZA UNA PREGUNTA</h4>

	<form action="" method="" class="formulario">
		<input type="text" name="fullName" placeholder="Nombre:" title="Nombre" />
		<input type="email" name="email" placeholder="Correo:" title="Correo" />
		<textarea placeholder="Pregunta:" name="question"></textarea>
		<button class="btn-enviar-p" type="submit">ENVIAR</button>
	</form>
@stop