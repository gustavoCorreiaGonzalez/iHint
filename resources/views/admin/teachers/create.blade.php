@extends('app')

@section('content')
	<div class="container">
		<h3>Novo Professor</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'users.teachers.store', 'class'=>'form']) !!}

		@include('users.teachers._form')

		<div class="form-group">
			{!! Form::submit('Criar Professor', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection