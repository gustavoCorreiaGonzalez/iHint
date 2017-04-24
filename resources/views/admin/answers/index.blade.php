@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Answers</h3>

		{{-- <a href="{{ route('admin.answers.create') }}" class="btn btn-default">New Answer</a>
		<br><br> --}}
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Answers</th>
					<th>Action</th>
				</tr>
			</thead>

			@foreach($answers as $answer)
			<tbody>
				<tr>
					<td>{{ $answer->id }}</td>
					<td>{{ $answer->answer }}</td>
					<td>
						<a href="{{ route('admin.answers.edit', ['id'=>$answer->id]) }}" class="btn btn-default btn-sm">
							Edit
						</a>

						<a href="{{ route('admin.answers.destroy', ['id'=>$answer->id]) }}" class="btn btn-default btn-sm">
							Remove
						</a>
					</td>
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $answers->render() !!}

	</div>

@endsection