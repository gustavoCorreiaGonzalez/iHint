<div class="col-md-5">
	@if(count($hints))
		<h3>Dicas</h3>
	@else
		<h3>Sem Dicas!</h3>
	@endif

	@foreach($hints as $hint)
		@if($hint->exercise_id == $exercise->id)

			<a href="" class="list-group-item" data-toggle="modal" data-target=".pop-up-{{ $hint->id }}">Dica {{ $hint->id }}</a>

		@endif
	@endforeach

	@foreach($hints as $hint)
		@if($hint->exercise_id == $exercise->id)
		    <div class="modal fade pop-up-{{ $hint->id }}" tabindex="-1" data-backdrop="static" keyboard="false" data-keyboard="false" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
		    	<div class="modal-dialog modal-lg">
		      		<div class="modal-content">
						<div class="modal-header">
		          			<h4 class="modal-title" id="myLargeModalLabel-1">Dica {{ $hint->id }}</h4>
		        		</div>
		        		<div class="modal-body">

		        			{{ $hint->description }}

			        		{!! Form::open(array('route'=>'user.loghints.store', 'class'=>'form'))!!}

									<br><br>

									<div class="form-group">
										{!! Form::label('Score', 'Nota para essa dica:') !!}

										<table class="table table-bordered">
											<thead>
												<tr>
													<th>1</th>
													<th>2</th>
													<th>3</th>
													<th>4</th>
													<th>5</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>{{ Form::radio('score', 1) }}</td>
													<td>{{ Form::radio('score', 2) }}</td>
													<td>{{ Form::radio('score', 3) }}</td>
													<td>{{ Form::radio('score', 4) }}</td>
													<td>{{ Form::radio('score', 5) }}</td>
												</tr>
											</tbody>
										</table>
									</div>

							@include('user.hints._form3')

							<div class="form-group">
								{!! Form::submit('Recibi a Dica', ['class'=>'btn btn-primary']) !!}
							</div>

							{!! Form::close() !!}

						</div>
		      		</div>
		    	</div>
		  	</div>
		@endif
	@endforeach
</div>
