<!-- Answer Form Input -->

<div class="form-group">
	{!! Form::label('Answer', 'Answear:') !!}
	{!! Form::file('answer') !!}
	{!! Form::hidden('user_id', Auth::user()->id) !!}
	{!! Form::hidden('exercise_id', $exercise->id) !!}
</div>