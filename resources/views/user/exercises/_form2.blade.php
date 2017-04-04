<!-- Users Solucions Form Input -->

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

<div class="form-group">
	<label for="code">Solução do User {{ $user_id_exercise }}:</label>
</div>
<div class="form-group">
	{!! Form::label('code', 'Faça um programa que receba um inteiro e diga se é o positivo ou negativo') !!}
</div>
<div class="form-group">
	<pre>
		<code class="prettyprint">
{{ $exercise }}
		</code>
	</pre>
</div>
<div class="form-group">
	{!! Form::label('hint', 'Escreva uma dica para melhorar a resolução desse exercício:') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control', 'value'=>'1dasda']) !!}
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise_id) !!}
</div>