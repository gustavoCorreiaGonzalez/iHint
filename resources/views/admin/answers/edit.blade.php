@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editing Answer: {{ $answer->answer }}</h3>
		
		@include('errors._check')

		{!! Form::model($answer, ['route'=>['admin.answers.update', $answer->id], 'class'=>'form']) !!}

		@include('admin.answers._form')

		<div class="form-group">
			{!! Form::submit('Save Answer', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection