@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>New Hint</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'user.hints.store', 'class'=>'form']) !!}

		@include('user.hints._form')

		<div class="form-group">
			{!! Form::submit('Save Hint', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection