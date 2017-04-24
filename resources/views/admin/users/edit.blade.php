@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editing User: {{ $user->name }}</h3>
		
		@include('errors._check')

		{!! Form::model($user, ['route'=>['admin.users.update', $user->id], 'class'=>'form']) !!}

		@include('admin.users._form')

		<div class="form-group">
			{!! Form::submit('Save User', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection