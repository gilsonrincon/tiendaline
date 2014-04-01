@extends('layouts.template')
@section('title')
	MEDIOS DE PAGO TIENDALINE
@stop

@section('pagos')
	<script type="text/javascript">
		$(document).ready(function(e){
			$('.btn-six').addClass('active');
		});
	</script>
	<h2  class="title-plan"><span> medios de </span> PAGO</h2>
	<div id="container-pagos">
		<div class="content-pagos">
			<p>
				Sin duda, una de las cosas más importantes a la hora de montar nuestra propia tienda virtual es el asunto de 
				los pagos, pues bien, ahora es muy fácil y seguro poner a disposición de quienes visitan un sitio Web la 
				posibilidad de realizar pagos a través de tarjetas débito o crédito.
			</p>
			<p>
				Nuestros planes incluyen la configuración de dos medios de pago, esto a elección del cliente y que cada uno puede 
				configurar sin ningún inconveniente.
			</p>
			<p>
				Cada cliente puede configurar sus propias cuentas de <a href="http://paypal.com" target="_blank">PayPal</a>  
				y <a href="http://payulatam.com"  target="_blank"> Pay U Latam</a>; los costos por transacción son aplicados 
				por cada pasarela de pago y no dependen de nosotros, la implementación de dichas plataformas no tiene ningún 
				costo y los clientes podrán configurarlas en el momento en que lo deseen.
			</p>
			<p>
				De igual forma, el sistema permite configurar medios adicionales como consignación bancaria o contra entrega.
			</p>
			<p>
				Si tiene alguna inquietud, no dude en comunicarse con nosotros.
			</p>
			{{HTML::image("img/tienda/img-pagos.jpg","medios de pago",array("class"=>"img-pagos"))}}
		</div>
		
	</div>
@stop