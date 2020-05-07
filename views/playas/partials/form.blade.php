<div class="form-group">
	{{ Form::label('nombre', 'Nombre de la playa') }}
	{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
	{{ Form::label('fondo', 'Tipo de fondo') }}
	{{ Form::text('fondo', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('picos', 'Nº de picos') }}
	{{ Form::text('picos', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('mejor_marea', 'Mejor marea') }}
	{{ Form::text('mejor_marea', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('oleaje_medio', 'Tamaño medio en metros') }}
	{{ Form::text('oleaje_medio', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>