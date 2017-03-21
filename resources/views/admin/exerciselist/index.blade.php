@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Lista de Exercícios</h3>

		<a href="{{ route('admin.exercises.create') }}" class="btn btn-default">Novo exercício</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Exercício</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($exercises as $exercise)
			<tbody>
				<tr>
					<td>{{ $exercise->id }}</td>
					<td>{{ $exercise->exercise }}</td>
					<td>
						<a href="{{ route('admin.exercises.edit', ['id'=>$exercise->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('admin.exercises.destroy', ['id'=>$exercise->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $exercises->render() !!}

	</div>

@endsection