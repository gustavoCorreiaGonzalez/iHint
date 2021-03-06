@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Novo Tipo</h3>

		@include('errors._check')

		{!! Form::open(['route'=>'admin.exercisetype.store', 'class'=>'form']) !!}

		@include('admin.exercisetype._form')

		<div class="form-group">
			{!! Form::submit('Criar Tipo', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
