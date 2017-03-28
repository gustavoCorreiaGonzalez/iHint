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
</div>

<div class="form-group">
	<a class="btn btn-primary" href="javascript:void(0)" id="addInput">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		Adicionar Resposta
	</a>
</div>

<div class="form-group">
	<div id="dynamicDiv">
		{!! Form::label('In', 'Entrada:') !!}
		{!! Form::text('answer', null, ['class'=>'form-control', 'name'=>'answer[0][answerInput]']) !!}
		{!! Form::label('Out', 'Saida:') !!}
		{!! Form::text('answer', null, ['class'=>'form-control', 'name'=>'answer[0][answerOutput]']) !!}
	</div>
</div>
	
	<script>
		
		$(function () {
			var i = 0;

		    var scntDiv = $('#dynamicDiv');

		    $(document).on('click', '#addInput', function () {
		    	i++;

		        $('<p>'+
						'<label for="In">Entrada:</label>'+
		        		'<input class="form-control" name="answer['+i+'][answerInput]" type="text">'+
		        		'<label for="Out">Saida:</label>'+
		        		'<input class="form-control" name="answer['+i+'][answerOutput]" type="text">'+
						'</br>'+
	        			'<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+
							'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> '+
							'Remover Campo'+
	        			'</a>'+
	        		'</div>'+
				'</p>').appendTo(scntDiv);
		        return false;
		    });

		    $(document).on('click', '#remInput', function () {
	            $(this).parents('p').remove();
	            i--;
		        return false;
		    });
		});
	</script>