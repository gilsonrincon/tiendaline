@extends('layouts.template')
@section('title')
 PLANES TIENDALINE
@stop
@section('article')
	<script type="text/javascript">
		$(document).ready(function(e){
			$('.btn-two').addClass('active');
		});
	</script>
	<h2  class="title-plan"><span>Conoce Nuestros</span> PLANES</h2>
	<p class="intro-home-plan">Contamos con 4 planes que se adaptan a las necesidades de nuestros clientes</p>
	<div id="table-plan">
	 	<table>
	 		<tr class="title-plan-table">
	              <th style="border-bottom:none;"></th> 		
				  <th>Plan 1</th>
				  <th>Plan 2</th>
				  <th>Plan 3</th>

			</tr>
			<tr class="no-mobile">
	             <th style=" color:#7c7c7c; font-size:120%;" >Especificaciones</th> 		
				 <th>
					 <div class="precio">
						<div class="content-precio " style="width:100%;">
							<p class="diner-s"> 
								$<span class="diner">35.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
							</p>
						</div>
						<p class="text-anticipo" style="font-size:75%;">O pagando el año anticipado <span style="color:#ff6800;">$ 29.900</span> mes</p>	
					</div>
				</th>
				<th>
					<div class="precio">
						<div class="content-precio" style="width:100%;">
							
							<p class="diner-s"> 
								$<span class="diner">74.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
							</p>
						</div>
						<p class="text-anticipo" style="font-size:75%;">O pagando el año anticipado <span style="color:#ff6800;">$ 64.900</span> mes</p>	
					</div>
				</th>
				 <th>
					<div class="precio">
						<div class="content-precio" style="width:100%;">
							<p class="diner-s"> 
								$<span class="diner">99.<span style="font-size:60%; font-weight:normal;">900</span></span>/Mes
							</p>
						</div>
						<p class="text-anticipo"style="font-size:75%;">O pagando el año anticipado <span style="color:#ff6800;">$ 89.900</span> mes</p>	
					</div>
				 </th>

			</tr>
			<tr>
				  <td scope="row" class="especifications">Hosting y dominio</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td  scope="row" class="especifications">Cuentas de correo electrónico</td>
				  <td>1</td>
				  <td>3</td>
				  <td>5</td>
			</tr>

			<tr>
				  <td scope="row" class="especifications">Número ilimitado de productos</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>

			<tr>
				  <td scope="row" class="especifications">Número ilimitado de imágenes por producto</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Sistema de búsqueda de productos</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>

			<tr>
				  <td scope="row" class="especifications">Posibilidad de gestionar traducciones para su tienda en múltiples idiomas</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Acceso a tutoriales en video y soporte a través de e-mail o Skype</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Formulario de contacto en la página de producto</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Posibilidad de sugerir productos a través de las redes sociales</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Recomendar a un amigo</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Importar y exportar productos desde un archivo CSV (archivo compatible con Microsoft Excel)	</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>	
			<tr>
				  <td scope="row" class="especifications">Carrito de compras</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Configuración de medios de pago: PayPal, PayU Latam, Contra entrega, consignación bancaria</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Sistema para gestión de clientes</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Configuración de moneda: Puede ofrecer a los visitantes de su tienda diferentes monedas y configurar las tasas de conversión adecuadas.</td>
				  <td>{{HTML::image("img/tienda/no.png","no",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Cupones de descuento y reglas de precio</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Aplicación en facebook</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>
			<tr>
				  <td scope="row" class="especifications">Chat para servicio al cliente (servicio de Zopim o similares)</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/no.png","Si",array("class"=>""))}}</td>
				  <td>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</td>
			</tr>

			<tr>
				  <td scope="row" style="border:none;"></td>
				  <td style="border:none;"><a class="btn-plan-list" href="/adquirir?plan=1">ADQUIRIR</a></td>
				  <td style="border:none;"><a class="btn-plan-list" href="/adquirir?plan=2">ADQUIRIR</a></td>
				  <td style="border:none;"><a class="btn-plan-list" href="/adquirir?plan=3">ADQUIRIR</a></td>
			</tr>
 				
	 	</table>

	</div>
	<div id="container-planp-planes">
		<div class="plan-personalizado ">
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
	<div class="general-plan">
		<p>Todos nuestros planes cuentan con las siguientes características:</p>
		<ul>
			<li>
				<span>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</span>
				Acceso a panel administrativo para configurar la tienda
			</li>
			<li>
				<span>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</span>
				Posibilidad de configurar algunos aspectos visuales, tales como colores y fuentes
			</li>
			<li>
				<span>{{HTML::image("img/tienda/yes.png","Si",array("class"=>""))}}</span>
				Posibilidad de seleccionar otra plantilla, esto según la disponibilidad y compatibilidad de cada plan
			</li>
		</ul>
	</div>
	
	


@stop