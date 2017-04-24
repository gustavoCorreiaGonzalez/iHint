@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>New User</h3>
		
		@include('errors._check')

		{!! Form::open(['route'=>'admin.users.store', 'class'=>'form']) !!}

		@include('admin.users._form')

		<div class="form-group">
			{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection