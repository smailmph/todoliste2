@extends('layouts.master')


@section('content')
<title>une TODO liste en laravel</title>
<div class="col-md-6">
	<h1>Choses à faire ! </h1>
		
	<ul class="list-group">
		@foreach ($tasks as $task)
			<li class="list-group-item {{ $task->completed ? 'completed' : '' }}">
				{{ Form::model($task, ['class' => 'task-update-form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}
					{{ Form::checkbox('completed') }}
				{{ Form::close() }}
				

				<img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->username }}" />>
				<strong>{{ $task->title }}</strong>
							
				{{ link_to(null, 'Supprimer', ['class' => 'task-delete btn btn-xs btn-danger', 'data-task-id' => $task->id]) }}
			</li>
		@endforeach
	</ul>
</div>

<div class="col-md-6">
	<h3>Ajouter une tâche</h3>
	@include('tasks/partials/_form')
</div>
@stop