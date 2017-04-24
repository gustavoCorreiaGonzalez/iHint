@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Exercises</h3>

		<a href="{{ route('admin.exercises.create') }}" class="btn btn-default">New Exercise</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Statement of the question</th>
					<th>Type of Exercise</th>
					<th>Answer</th>
					<th>Action</th>
				</tr>
			</thead>

			@foreach($exercises as $exercise)
			<tbody>
				<tr>
					<td>{{ $exercise->id }}</td>
					<td>{{ $exercise->enunciation }}</td>
					<td>{{ array_get($types, $exercise->exercisetype_id) }}</td>
					<td>{{ $exercise->answer }}</td>
					<td>
						<a href="{{ route('admin.exercises.edit', ['id'=>$exercise->id]) }}" class="btn btn-default btn-sm">
							Edit
						</a>

						<a href="{{ route('admin.exercises.destroy', ['id'=>$exercise->id]) }}" class="btn btn-default btn-sm">
							Delete
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $exercises->render() !!}

	</div>

@endsection