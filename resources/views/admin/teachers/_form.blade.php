<!-- Teacher Form Input -->

<div class="form-group">
	{!! Form::label('Teacher', 'Professor:') !!}
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
	{!! Form::label('Zipcode', 'CEP:') !!}
	{!! Form::text('zipcode', null, ['class'=>'form-control ']) !!}
</div>
