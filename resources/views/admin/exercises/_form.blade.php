<!-- Exercise Form Input -->

<div class="form-group">
	{!! Form::label('Enunciation', 'Enunciado:') !!}
	{!! Form::text('enunciation', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Type', 'Tipo Exercício:') !!}
	{!! Form::select('exercisetype_id', $types, null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Answer', 'Resposta:') !!}
	{!! Form::text('answer', null, ['class'=>'form-control ']) !!}
</div>

