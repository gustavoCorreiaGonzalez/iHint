<!-- Hint Form Input -->

<div class="form-group">
	{!! Form::label('Description', 'Descrição:') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control ']) !!}
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise_id) !!}
</div>