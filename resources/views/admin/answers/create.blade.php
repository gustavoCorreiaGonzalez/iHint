@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>New Answer</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'admin.answers.store', 'class'=>'form']) !!}

		@include('admin.answers._form')

		<div class="form-group">
			{!! Form::submit('Create Answer', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection