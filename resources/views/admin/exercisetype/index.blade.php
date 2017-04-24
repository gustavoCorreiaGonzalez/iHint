@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Types of Exercises</h3>

		<a href="{{ route('admin.exercisetype.create') }}" class="btn btn-default">New Type</a>
		<br><br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Type</th>
					<th>Action</th>
				</tr>
			</thead>

			@foreach($exercisetypes as $exercisetype)
			<tbody>
				<tr>
					<td>{{ $exercisetype->id }}</td>
					<td>{{ $exercisetype->type }}</td>
					<td>
						<a href="{{ route('admin.exercisetype.edit', ['id'=>$exercisetype->id]) }}" class="btn btn-default btn-sm">
							Edit
						</a>

						<a href="{{ route('admin.exercisetype.destroy', ['id'=>$exercisetype->id]) }}" class="btn btn-default btn-sm">
							Remove
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $exercisetypes->render() !!}

	</div>

@endsection