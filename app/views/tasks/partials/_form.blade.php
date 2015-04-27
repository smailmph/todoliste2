{{ Form::open(['url' => '/tasks', 'class' => 'form']) }}
	<div class="form-group">
		{{ Form::label('title', 'Titre') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ $errors->first('title', '<span class="error">:message</span>') }}
	</div>
	
	<div class="form-group">
		{{ Form::label('user_id', 'utilisateur') }}
		{{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
	</div>
	
	<div class="form-group">
		{{ Form::submit('Ajouter!', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}