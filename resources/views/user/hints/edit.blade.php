@extends('user.layout.auth')

@section('content')
	<div class="container">
		<h3>Editando Dica: {{ $hint->hint }}</h3>

		@include('errors._check')

		{!! Form::model($hint, ['route'=>['user.hints.update', $hint->id], 'class'=>'form']) !!}

		@include('user.hints._form2')

		<div class="form-group">
			{!! Form::submit('Salvar Dica', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
