@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Usuários</h3>

		<a href="{{ route('admin.users.create') }}" class="btn btn-default">Novo Usuário</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($users as $user)
			<tbody>
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>
						<a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('admin.users.destroy', ['id'=>$user->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $users->render() !!}

	</div>

@endsection