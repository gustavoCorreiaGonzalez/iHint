@extends('user.layout.auth')

@section('content')
<div class="container">
    <h3>Lista de Exercícios</h3>

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<strong>Muito Bom!</strong>
			{{Session::get('success')}}
		</div>
	@endif

    <div class="panel-body">
        <div class="list-group">

			<?php $count = 0 ?>

            @foreach($exercises as $exercise)
				<?php $count++ ?>

                <a href="{{ route('user.exercises.performExercise', ['id'=>$exercise->id]) }}" class="list-group-item">Exercício {{ $exercise->id }} </a>
            @endforeach

            @if ($count == 0) 
				Todos os exercícios foram realizados!
            @endif

            {!! $exercises->render() !!}

        </div>
    </div>
</div>

@endsection    