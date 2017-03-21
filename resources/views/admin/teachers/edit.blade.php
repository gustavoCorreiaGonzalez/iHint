@extends('app')

@section('content')
	<div class="container">
		<h3>Editando Professor: {{ $teacher->user->name }}</h3>
		
		@include('errors._check')

		{!! Form::model($teacher, ['route'=>['users.teachers.update', $teacher->id], 'class'=>'form']) !!}

		@include('users.teachers._form')

		<div class="form-group">
			{!! Form::submit('Salvar Professor', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection