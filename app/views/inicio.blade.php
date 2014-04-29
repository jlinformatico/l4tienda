@extends('plantilla')

@section('contenido')
<div class="jumbotron">
	<h1>E-commerce</h1>
	<p class="lead">Se pueden crear vendedores y productos en sus secciones</p>
	<p class="lead">Framework PHP Laravel 4, MariaDB y Bootstrap 3</p>
</div>

<div class="row marketing">
	<!-- Aqui listamos todos los vendedores -->
	@foreach($vendedores as $vendedor)
		<div class="panel panel-primary">
			<div class="panel-heading">{{ $vendedor->nombre.' '.$vendedor->apellido}}</div>
			
			<ul class="list-group">
				<!-- Aquí listamos todos los productos de un vendedor -->
				@foreach($vendedor->productos as $producto)
					<li class="list-group-item">{{ $producto->descripcion.' '.$producto->precio}}</li>
				@endforeach
			</ul>
		</div>
	@endforeach
</div>
@stop
