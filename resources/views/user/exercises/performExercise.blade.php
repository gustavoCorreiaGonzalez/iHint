@extends('user.layout.auth')

@section('content')
	<div class="container">
		
		@if(Session::has('failure'))
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>Falhou!</strong>
				{{Session::get('failure')}}
			</div>
		@endif

		@if(Session::has('logHintSuccess'))
			<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>Muito Bom!</strong>
				{{Session::get('logHintSuccess')}}
			</div>
		@endif

		<div class="col-md-6">

	    	<h3>Exercício {{ $exercise->id }}</h3>

			<label for="enunciation">{{ $exercise->enunciation }}</label>
			
			</br></br>

		    @include('errors._check')

			{!! Form::open(array('route'=>'user.exercises.sendAnswer', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class'=>'form'))!!}

			@include('user.exercises._form')

			<div class="form-group">
				{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
			</div>		

			{!! Form::close() !!}
			
		</div>
		
		@include('user.hints.listHints')
		
	</div>

@endsection    