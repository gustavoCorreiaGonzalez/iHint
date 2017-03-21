@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editando tipo: {{ $exercisetype->exercisetype }}</h3>
		
		@include('errors._check')

		{!! Form::model($exercisetype, ['route'=>['admin.exercisetype.update', $exercisetype->id], 'class'=>'form']) !!}

		@include('admin.exercisetype._form')

		<div class="form-group">
			{!! Form::submit('Salvar tipo', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection