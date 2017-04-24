@extends('admin.layout.auth')

@section('content')
	<div class="container">
		@if(Session::has('success'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>Very Good!</strong>
				{{Session::get('success')}}
			</div>
		@endif

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