@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Lista de Exercício</h3>

		<a href="{{ route('admin.exerciselist.create') }}" class="btn btn-default">Nova Lista</a>
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Lista</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($exerciselists as $exerciselist)
			<tbody>
				<tr>
					<td>{{ $exerciselist->id }}</td>
					<td>{{ $exerciselist->topic }}</td>
					<td>
						<a href="{{ route('admin.exerciselist.edit', ['id'=>$exerciselist->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('admin.exerciselist.destroy', ['id'=>$exerciselist->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $exerciselists->render() !!}

	</div>

@endsection
