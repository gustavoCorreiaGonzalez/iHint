@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Nova Resposta</h3>

		@include('errors._check')

		{!! Form::open(['route'=>'admin.answers.store', 'class'=>'form']) !!}

		@include('admin.answers._form')

		<div class="form-group">
			{!! Form::submit('Criar Resposta', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
