<!-- Student Form Input -->

<div class="form-group">
	{!! Form::label('Student', 'Aluno:') !!}
	{!! Form::text('user[name]', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Email', 'Email:') !!}
	{!! Form::text('user[email]', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Phone', 'Telefone:') !!}
	{!! Form::text('phone', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Zipcode', 'CEP:') !!}
	{!! Form::text('zipcode', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Address', 'Endereço:') !!}
	{!! Form::text('address', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('City', 'Cidade:') !!}
	{!! Form::text('city', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('State', 'Estado:') !!}
	{!! Form::text('state', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('Country', 'País:') !!}
	{!! Form::text('country', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Universidade:') !!}
	{!! Form::text('university', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Curso:') !!}
	{!! Form::text('university', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Tempo que está cursando:') !!}
	{!! Form::text('university', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Semestre:') !!}
	{!! Form::select('size', ['L' => '1° Semestre', 'S' => '2° Semestre'], null, ['placeholder' => 'Semestre...']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Quantidade de vezes que cursou a disciplina de Algoritmo:') !!}
	{!! Form::text('university', null, ['class'=>'form-control ']) !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Experiência com programação antes da graduação:') !!}
	Sim {!! Form::radio('name', 'Sim') !!}
	Não {!! Form::radio('name', 'Não') !!}
</div>

<div class="form-group">
	{!! Form::label('University', 'Trabalha ou já trabalhou com programação:') !!}
	Sim {!! Form::radio('name', 'Sim') !!}
	Não {!! Form::radio('name', 'Não') !!}
</div>