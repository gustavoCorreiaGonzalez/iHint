@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Editing List: {{ $exerciselist->id }}</h3>
		
		@include('errors._check')

		{!! Form::model($exerciselist, ['route'=>['admin.exerciselist.update', $exerciselist->id], 'class'=>'form']) !!}

		@include('admin.exerciselist._form')

		<div class="form-group">
			{!! Form::submit('Save List', ['class'=>'btn btn-primary']) !!}
		</div>		

		{!! Form::close() !!}

	</div>

@endsection