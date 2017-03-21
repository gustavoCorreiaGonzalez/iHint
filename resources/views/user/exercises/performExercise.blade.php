@extends('user.layout.auth')

@section('content')
	<div class="container">
		
		@if(Session::has('failure'))
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<strong>falhou!</strong>
				{{Session::get('failure')}}
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
		<div class="col-md-5">
       		<h3>Pedir Dicas</h3>
       		<div class="list-group">
       			@foreach($hints as $hint)
       				@if($hint->exercise_id == $exercise->id)
       					<a href="" class="list-group-item" data-toggle="modal" data-target=".pop-up-{{ $hint->id }}">Dica {{ $hint->id }}</a>
       				@endif
       			@endforeach
       		</div>

			@foreach($hints as $hint)
				@if($hint->exercise_id == $exercise->id)
				    <div class="modal fade pop-up-{{ $hint->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
				    	<div class="modal-dialog modal-lg">
				      		<div class="modal-content">
								<div class="modal-header">
				          			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				          			<h4 class="modal-title" id="myLargeModalLabel-1">Dica {{ $hint->id }}</h4>
				        		</div>
				        		<div class="modal-body">
				        			{{ $hint->description }}
				        		</div>
				      		</div>
				    	</div>
				  	</div>
				@endif
			@endforeach
   		</div>
	</div>

@endsection    