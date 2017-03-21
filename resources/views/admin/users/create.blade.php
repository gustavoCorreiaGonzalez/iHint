@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Novo Usuário</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'admin.users.store', 'class'=>'form']) !!}

		@include('admin.users._form')

		<div class="form-group">
			{!! Form::submit('Criar Usuário', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection