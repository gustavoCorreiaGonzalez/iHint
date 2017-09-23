@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Tipo de Exercícios</h3>

		<a href="{{ route('admin.exercisetype.create') }}" class="btn btn-default">Novo Tipo</a>
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tipo</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($exercisetypes as $exercisetype)
			<tbody>
				<tr>
					<td>{{ $exercisetype->id }}</td>
					<td>{{ $exercisetype->type }}</td>
					<td>
						<a href="{{ route('admin.exercisetype.edit', ['id'=>$exercisetype->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('admin.exercisetype.destroy', ['id'=>$exercisetype->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $exercisetypes->render() !!}

	</div>

@endsection
