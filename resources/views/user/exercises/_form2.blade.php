<!-- Users Solucions Form Input -->

<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

<div class="form-group">
	<label for="code">User Resolution {{ $user_id_exercise }}:</label>
</div>
<div class="form-group">
	<label for="code">{{ $enunciation }}</label>
</div>
<div class="form-group">
	<pre>
		<code class="prettyprint">
{{ $answer }}
		</code>
	</pre>
</div>
<div class="form-group">
	{!! Form::label('hint', 'Write a hint to improve the resolution of this exercise:') !!}
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
	{!! Form::hidden('user_id', Auth::user()->id)!!}
	{!! Form::hidden('exercise_id', $exercise_id) !!}
</div>