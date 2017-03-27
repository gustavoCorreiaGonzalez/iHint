@extends('admin.layout.auth')

@section('content')
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
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