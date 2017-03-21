@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Nova Dica</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'user.hints.store', 'class'=>'form']) !!}

		@include('user.hints._form')

		<div class="form-group">
			{!! Form::submit('Criar Dica', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection