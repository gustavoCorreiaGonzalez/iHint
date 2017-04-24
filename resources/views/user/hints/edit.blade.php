@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editing Hint: {{ $hint->hint }}</h3>
		
		@include('errors._check')

		{!! Form::model($hint, ['route'=>['user.hints.update', $hint->id], 'class'=>'form']) !!}

		@include('user.hints._form2')

		<div class="form-group">
			{!! Form::submit('Save Hint', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection