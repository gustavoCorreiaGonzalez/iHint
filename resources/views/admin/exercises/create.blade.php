@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Novo exercício</h3>

		@include('errors._check')

		{!! Form::open(['route'=>'admin.exercises.store', 'class'=>'form']) !!}

		@include('admin.exercises._form')

		<div class="form-group">
			{!! Form::submit('Criar exercício', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection