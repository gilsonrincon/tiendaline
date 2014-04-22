@extends('layouts.template')
@section('title')
	ADQUIRIR PLAN  TIENDALINE
@stop
@section('article')
	<h2  class="title-plan"><span> Comienza a vender tus productos</span></h2>
     <div class="content-formulario-demo">
     		{{HTML::image("/img/tienda/titulo-planes.png","demo",array("class"=>""))}}
     		<form action="" method="" class="formulario">

     		    <div class="container-left-fd">
     		    	<h3>Tu  Informacion personal</h3>
     		    	<input  type="text"  name="fullName" placeholder="Nombre:" title="Nombre" />
     		    	<select name="identidad">
     		    		<option>Tipo de Identidad</option>
						<option value="cedula">Cedula de Ciudadania</option>
						<option value="pasaporte">Pasaporte </option>
						<option value="extranjeria">Cedula de Extranjeria</option>
     		    	</select>
     		    	<input type="number" name="identificationnumber" placeholder="Numero de Identidad:" title="Numero de Identidad" />
     		    	<input type="text" name="city" placeholder="Ciudad:" title="Ciudad" />
     		    	<input type="text" name="direction" placeholder="Dirección:" title="Dirección"/>
     		    	<input type="tel" name="telephone" placeholder="Teléfono:" title="Telefono" />
     		    	<input type="tel" name="mobilephone" placeholder="Teléfono Móvil:" title="Teléfono Móvil" />
     		    	<select name="conocimientotienda">
     		    		<option>Como conociste a tiendaline</option>
						<option value="cedula">Cedula de Ciudadania</option>
						<option value="pasaporte">Pasaporte </option>
						<option value="extranjeria">Cedula de Extranjeria</option>
     		    	</select>
     		    </div>

     		    <div class="container-right-fd">
     		        <h3>Información de tu tienda</h3>
     		     	<input type="text" name="city" placeholder="Nombre de la tienda:" title="Nombre de la tienda" />
     		     	<input type="email" name="email" placeholder="Correo Electrónico:" title="Correo" />
     		     	<input type="password" name="password" placeholder="Contraseña:" title="Contraseña"  />
     		    </div>

     		    <div class="container-final-fd">
     		    	<div class="termines-content" style="text-align:center; color:#5e5e5e;">
			        	Acepto Términos de Uso<input type="checkbox" name="terminesofuse" class="termines">
			        </div>	
					<button class="btn-demo" type="submit">ENVIAR</button>
				</div>
				
			</form>
     </div>
	 
	 
	 
@stop