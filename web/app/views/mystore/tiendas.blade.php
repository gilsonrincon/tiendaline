@extends('layouts.templateuser')
@section('title') 
	TU 	PERFIL
@stop

@section('article')
	<h2 class="title-generals">Mis tiendas</h2>
	<ul id="list-shop">
		<li>
		    <div class="img-shop">
		    	{{HTML::image("/img/tienda/tienda1.jpg","",array("class"=>""))}}
		    </div>
		    <!--
		    <div class="logo">
		    	{{HTML::image("/img/tienda/logot1.jpg","",array("class"=>""))}}
		    </div>
		    -->
			<h3 class="name-shop">TIENDA EJEMPLO</h3>
			<div class="link-shop">
				{{HTML::link("http://tiendaline.co","www.tienda.com","blank",array("class"=>""))}}
			</div>
			<div class="link-admin-shop">
			    <h4>Administra tu tienda</h4>
				{{HTML::link("http://tiendaline.co","www.tienda.com/panel","blank", array("class"=>""))}}
			</div>
             
		</li>	
	</ul>
	
@stop

