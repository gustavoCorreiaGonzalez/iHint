<!-- Hint Form Input -->

<div class="form-group">
	{!! Form::label('Motivation', 'Based on the exercise performed, write a hint about the idea used.') !!}
</div>
<div class="form-group">
	{!! Form::label('Description', 'Description:') !!}
</div>
<div class="form-group">
	{!! Form::textarea('description', null, ['class'=>'form-control ']) !!}
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise_id) !!}
</div>