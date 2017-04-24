@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Another User's Solution</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'user.hints.storeUsersSolucions', 'class'=>'form']) !!}
		
		@include('user.exercises._form2')

		<div class="form-group">
			{!! Form::submit('Create Hint', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection