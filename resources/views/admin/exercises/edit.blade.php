@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editar Exercício: {{ $exercise->exercise }}</h3>

		@include('errors._check')

		{!! Form::model($exercise, ['route'=>['admin.exercises.update', $exercise->id], 'class'=>'form']) !!}

		@include('admin.exercises._form')

		<div class="form-group">
			{!! Form::submit('Salvar Exercício', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
