<div class="form-group">
	{{ Form::label('localidad', 'Localidad') }}
	{{ Form::text('localidad', null, ['class' => 'form-control', 'id' => 'localidad']) }}
</div>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
