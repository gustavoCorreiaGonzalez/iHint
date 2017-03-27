<!-- Hint Form Input -->

<div class="form-group">
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise->id) !!}
	{!! Form::hidden('hint_id', $hint->id) !!}
</div>