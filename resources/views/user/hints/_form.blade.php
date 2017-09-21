<!-- Hint Form Input -->

<div class="form-group">
	{!! Form::label('Motivation', 'Com base no exercício realizado, escreva uma dica sobre o pensamento utilizado.') !!}
</div>
<div class="form-group">
	{!! Form::label('Description', 'Descrição:') !!}
</div>
<div class="form-group">
	{!! Form::textarea('description', null, ['class'=>'form-control ']) !!}
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise_id) !!}
</div>
