@extends('user.layout.auth')

@section('content')
	<div class="container">
		<h3>Dicas</h3>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>ID Exercício</th>
					<th>Descrição</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($hints as $hint)
			<tbody>
				<tr>
					<td>{{ $hint->id }}</td>
					<td>{{ $hint->exercise_id }}</td>
					<td>{{ $hint->description }}</td>
					<td>
						<a href="{{ route('user.hints.edit', ['id'=>$hint->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('user.hints.destroy', ['id'=>$hint->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $hints->render() !!}

	</div>

@endsection