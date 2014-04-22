@extends('layouts.templatetwo')
@section('title')
	INGRESAR A MI TIENDA
@stop
@section('article')

 	<h2 class="title-tienda">Ingresar a <span>MI TIENDA</span></h2>
 	<form action="" method="" class="formulario ingresar-mitienda">
			<input type="email" name="email" placeholder="Correo Electrónico:" title="Correo" />
		    <input type="password" name="password" placeholder="Contraseña:" title="Contraseña" />
			<a href="/recordar">Recordar Contraseña</a>		
			<button class="btn-ingresar" type="submit">INGRESAR</button>	
	</form>
@stop