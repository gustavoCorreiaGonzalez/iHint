@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Exercícios</h3>

		@include('errors._check')

		{!! Form::open(['route'=>'admin.exerciselist.store', 'class'=>'form']) !!}

		@include('admin.exerciselist._form')

		<div class="form-group">
			{!! Form::submit('Criar lista', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection