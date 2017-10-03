<!-- Exercise Form Input -->

<div class="form-group">
	{!! Form::label('mode', 'Populando Banco de Dicas:') !!}
	{!! Form::radio('experiment_mode', 1)  !!}
</div>
<div class="form-group">
	{!! Form::label('mode', 'Experimento Real:') !!}
	{!! Form::radio('experiment_mode', 2)  !!}
</div>
