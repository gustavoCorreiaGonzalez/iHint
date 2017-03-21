@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editando Usuário: {{ $user->name }}</h3>
		
		@include('errors._check')

		{!! Form::model($user, ['route'=>['admin.users.update', $user->id], 'class'=>'form']) !!}

		@include('admin.users._form')

		<div class="form-group">
			{!! Form::submit('Salvar Usuário', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection