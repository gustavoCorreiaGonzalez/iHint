@extends('admin.layout.auth')

@section('content')
	<div class="container">
		<h3>Users</h3>

		<!-- <a href="{{ route('admin.users.create') }}" class="btn btn-default">New User</a>
		<br><br> -->
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>

			@foreach($users as $user)
			<tbody>
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<!-- <td>
						<a href="{{ route('admin.users.edit', ['id'=>$user->id]) }}" class="btn btn-default btn-sm">
							Edit
						</a>
					
						<a href="{{ route('admin.users.destroy', ['id'=>$user->id]) }}" class="btn btn-default btn-sm">
							Remove
						</a>
					</td> -->
				</tr>
			</tbody>
			@endforeach
		</table>

		{!! $users->render() !!}

	</div>

@endsection