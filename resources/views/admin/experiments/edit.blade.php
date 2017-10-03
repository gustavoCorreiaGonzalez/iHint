@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editando Tipo: {{ $experiment->experiment }}</h3>

		@include('errors._check')

		{!! Form::model($experiment, ['route'=>['admin.experiments.update', $experiment->id], 'class'=>'form']) !!}

		@include('admin.experiments._form')

		<div class="form-group">
			{!! Form::submit('Salvar Modo', ['class'=>'btn btn-primary']) !!}
		</div>

		{!! Form::close() !!}

	</div>

@endsection
