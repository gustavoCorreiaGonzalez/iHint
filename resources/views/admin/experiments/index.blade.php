@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Modo do Experimento</h3>

		<a href="{{ route('admin.experiments.create') }}" class="btn btn-default">Novo Modo</a>
		<br><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tipo</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($experiments as $experiment)
			<tbody>
				<tr>
					<td>{{ $experiment->id }}</td>
					<td>{{ $experiment->experiment_mode }}</td>
					<td>
						<a href="{{ route('admin.experiments.edit', ['id'=>$experiment->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $experiments->render() !!}

	</div>

@endsection
