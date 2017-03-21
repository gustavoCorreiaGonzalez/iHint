@extends('app')

@section('content')
	<div class="container">
		<h3>Professores</h3>

		<a href="{{ route('users.teachers.create') }}" class="btn btn-default">Novo Professor</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($teachers as $teacher)
			<tbody>
				<tr>
					<td>{{ $teacher->id }}</td>
					<td>{{ $teacher->user->name }}</td>
					<td>
						<a href="{{ route('users.teachers.edit', ['id'=>$teacher->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('users.teachers.destroy', ['id'=>$teacher->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $teachers->render() !!}

	</div>

@endsection