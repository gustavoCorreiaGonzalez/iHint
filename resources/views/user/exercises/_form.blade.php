<!-- Answer Form Input -->

<div class="form-group">
	{!! Form::label('Answer', 'Answer:') !!}
	{!! Form::file('answer') !!}
	{!! Form::hidden('user_id', Auth::user()->id) !!}
	{!! Form::hidden('exercise_id', $exercise->id) !!}
</div>