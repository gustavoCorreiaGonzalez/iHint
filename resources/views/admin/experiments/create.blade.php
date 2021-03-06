@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Novo Modo</h3>

		@include('errors._check')

		{!! Form::open(['route'=>'admin.experiments.store', 'class'=>'form']) !!}

		@include('admin.experiments._form')

		<div class="form-group">
			{!! Form::submit('Criar Modo', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
