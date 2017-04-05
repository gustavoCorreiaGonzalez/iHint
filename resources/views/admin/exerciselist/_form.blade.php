<!-- Exercise List Form Input -->
<script type="text/javascript">
	var array_exercises = new Array()

	function append_array_exercises(id) {
		array_exercises.push(id)

        document.getElementById('add'+id).style.display = 'none'
        document.getElementById('remove'+id).style.display = 'block'

        $('input[type=hidden][name=exercises]').val(JSON.stringify(array_exercises));
	}

	function remove_array_exercises(id) {

		var index = array_exercises.indexOf(id);

		if (index > -1) {
		    array_exercises.splice(index, 1);
		}

        document.getElementById('remove'+id).style.display = 'none'
    	document.getElementById('add'+id).style.display = 'block'

    	$('input[type=hidden][name=exercises]').val(JSON.stringify(array_exercises));
	}

</script>

<div class="form-group">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Exercício</th>
				<th>Ação</th>
			</tr>
		</thead>
		@foreach($exercises as $exercise)
		<tbody>
			<tr>
				<td>{{ $exercise->id }}</td>
				<td>{{ $exercise->enunciation }}</td>
				<td>
					<div id="add{{ $exercise->id }}" style="display: block;">
						<a onclick="append_array_exercises({{ $exercise->id }})" class="btn btn-default btn-sm">
							Adicionar a lista
						</a>	
					</div>
					
					<div id="remove{{ $exercise->id }}" style="display: none;">
						<a onclick="remove_array_exercises({{ $exercise->id }})" class="btn btn-default btn-sm">
							Remover da lista
						</a>
					</div>
				</td>
			</tr>
		</tbody>
		@endforeach
	</table>
</div>

<div class="form-group">
	{!! Form::label('nameList', 'Nome da Lista:') !!}
	{!! Form::text('topic', null, ['class'=>'form-control ']) !!}
	{!! Form::hidden('exercises') !!}
</div>