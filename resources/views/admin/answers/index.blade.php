@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Respostas</h3>

		<a href="{{ route('admin.answers.create') }}" class="btn btn-default">Nova resposta</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Respostas</th>
					<th>Ação</th>
				</tr>
			</thead>

			@foreach($answers as $answer)
			<tbody>
				<tr>
					<td>{{ $answer->id }}</td>
					<td>{{ $answer->answer }}</td>
					<td>
						<a href="{{ route('admin.answers.edit', ['id'=>$answer->id]) }}" class="btn btn-default btn-sm">
							Editar
						</a>

						<a href="{{ route('admin.answers.destroy', ['id'=>$answer->id]) }}" class="btn btn-default btn-sm">
							Remover
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $answers->render() !!}

	</div>

@endsection