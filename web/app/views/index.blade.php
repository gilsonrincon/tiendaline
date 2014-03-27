@extends('layouts.template')

@section('title')
	TIENDALINE
@stop

@section('banner')
	<div class="container-banner">
		{{HTML::image("/img/tienda/bannerhome.jpg","bannner TiendaLine",array("class"=>""))}}
		<div class="content-banner-home">
				<div class="content-text-banner">
					<h1>Crea tu Propia Tienda On-line.</h1>
				</div>
		</div>
		
	</div>
@stop 
