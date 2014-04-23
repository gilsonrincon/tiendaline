@extends('layouts.templateuser')
@section('title') 
	TU 	PERFIL
@stop

@section('article')
	<h2 class="title-generals">Información del usuario</h2>
	<div id="container-info-user">
		<p><span class="item">Nombre:</span> Jhonatan Velasquez</p>
		<div class="edit">{{HTML::image("/img/tienda/edit.png","Editar",array("class"=>""))}}</div>

		<p><span class="item">Correo:</span> example@swm.com.co</p>
		<div class="edit">{{HTML::image("/img/tienda/edit.png","Editar",array("class"=>""))}}</div>

		<p><span class="item">Contraseña:</span> ******</p>
		<div class="edit">{{HTML::image("/img/tienda/edit.png","Editar",array("class"=>""))}}</div>

		<p><span class="item">Ciudad:</span> Medellín</p>
		<div class="edit">{{HTML::image("/img/tienda/edit.png","Editar",array("class"=>""))}}</div>

		<p><span class="item">Teléfono:</span> 5241715</p>
		<div class="edit">{{HTML::image("/img/tienda/edit.png","Editar",array("class"=>""))}}</div>
		
	</div>
	

@stop
