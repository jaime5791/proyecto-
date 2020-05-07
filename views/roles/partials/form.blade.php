<div class="form-group">
	{{ Form::label('name', 'Nombre del rol') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripcion') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
	<label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
	<label>{{ Form::radio('special', 'no-access') }} Ningun acceso</label>
</div>
</hr>


<h3>Lista de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
		<li>
			<label>
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<!-- en cursiva y entre parentesis la descripcion del rol ?: condicion ternaria-->
				<em>({{ $permission->description ?: 'Sin descripcion' }})</em>
			</label>
		</li>
			<!-- <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
			   {{ $permission->name }}
			  <em>({{ $permission->description }})</em>-->
		@endforeach
		
	</ul>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
     <!-- <button type="submit" class="btn btn-sm btn-primary">Guardar</button> -->	
</div>

