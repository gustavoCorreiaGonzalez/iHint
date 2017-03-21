@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editando exercício: {{ $exercise->exercise }}</h3>
		
		@include('errors._check')

		{!! Form::model($exercise, ['route'=>['admin.exercises.update', $exercise->id], 'class'=>'form']) !!}

		@include('admin.exercises._form')

		<div class="form-group">
			{!! Form::submit('Salvar exercício', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection