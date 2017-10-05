@extends('user.layout.auth')

@section('content')
	<div class="container">

		@if(Session::has('failure'))
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>Falhou!</strong>
					O exercício está errado!

				</br>

				<!-- Successful tests!
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{Session::get('failure')}}%;">
				    {{Session::get('failure')}}
				  </div>
				</div> -->
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

		@if ($experiment->experiment_mode == 2)
			<div class="col-md-6">
		@endif

	  <h3>Exercício {{ $exercise->id }}</h3>

			<pre><label for="enunciation">{{ $exercise->enunciation }}</label></pre>

			</br></br>

		  @include('errors._check')

				{!! Form::open(array('route'=>'user.exercises.sendAnswer', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class'=>'form'))!!}

			@include('user.exercises._form')

			<div class="form-group">
				{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
			</div>

			{!! Form::close() !!}

		</div>

		@if ($experiment->experiment_mode == 2)
			@include('user.hints.listHints')
		@endif

	</div>

@endsection
