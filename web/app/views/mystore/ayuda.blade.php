@extends('layouts.templateuser')
@section('title') 
	SOLICITAR AYUDA
@stop

@section('article')
	<h2 class="title-generals">Solicitud de soporte y ayuda</h2>
	<div id="container-help">
		<p>
			Si tiene algun problema con nuestra plataforma o tu tienda no dude en pedir soporte Nosotros nos encargaremos de contestar todas sus preguntas.
		</p>
		<form action="" method="POST" class="form-help">
			<input type="text" placeholder="Asunto (Inquietud de su problema)" name="" required="" />
			<textarea placeholder="Mensaje (Aclaranos tu inquietud)" name="message"></textarea>
			<button type="submit" class="btn-send-help">ENVIAR</button>

		</form>

	</div>
	
@stop