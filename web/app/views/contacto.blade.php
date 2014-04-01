@extends('layouts.template')
@section('title')
	CONTACTENOS TIENDALINE
@stop
@section('article')
	 <h2  class="title-plan"><span> Contacto </span></h2>
	 <form action="" method="" class="formulario">
		<input type="text" name="fullName" placeholder="Nombre:" title="Nombre" />
		<input type="email" name="email" placeholder="Correo:" title="Correo" />
		<input type="tel" name="telephone" placeholder="Teléfono:" title="Telefono" />
		<input type="text" name="city" placeholder="Ciudad:" title="Ciudad" />
		<input type="text" name="subject" placeholder="Asunto:" title="Asunto" />
		<textarea placeholder="Mensaje:" name="message"></textarea>
		<button class="btn-enviar-p" type="submit">ENVIAR</button>
	</form>
@stop