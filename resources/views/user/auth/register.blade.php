@extends('user.layout.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de Usuário</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('university') ? ' has-error' : '' }}">
                            <label for="university" class="col-md-4 control-label">Univercidade (Iniciais)</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control" name="university" value="{{ old('university') }}">

                                @if ($errors->has('university'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('university') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">Curso</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}">

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('semester') ? ' has-error' : '' }}">
                            <label for="semester" class="col-md-4 control-label">Semestrer</label>

                            <div class="col-md-6">
                                <select id="semester" class="form-control" name="semester" value="{{ old('semester') }}">
                                    @if (old('semester') == 1)
                                        <option value="1" selected="">1° Semestre</option>
                                    @else
                                        <option value="1">1° Semestre</option>
                                    @endif

                                    @if (old('semester') == 2)
                                        <option value="2" selected="">2° Semestre</option>
                                    @else
                                        <option value="2">2° Semestre</option>
                                    @endif

                                    @if (old('semester') == 3)
                                        <option value="3" selected="">3° Semestre</option>
                                    @else
                                        <option value="3">3° Semestre</option>
                                    @endif

                                    @if (old('semester') == 4)
                                        <option value="4" selected="">4° Semestre</option>
                                    @else
                                        <option value="4">4° Semestre</option>
                                    @endif

                                    @if (old('semester') == 5)
                                        <option value="5" selected="">5° Semestre</option>
                                    @else
                                        <option value="5">5° Semestre</option>
                                    @endif

                                    @if (old('semester') == 6)
                                        <option value="6" selected="">6° Semestre</option>
                                    @else
                                        <option value="6">6° Semestre</option>
                                    @endif

                                    @if (old('semester') == 7)
                                        <option value="7" selected="">7° Semestre</option>
                                    @else
                                        <option value="7">7° Semestre</option>
                                    @endif

                                    @if (old('semester') == 8)
                                        <option value="8" selected="">8° Semestre</option>
                                    @else
                                        <option value="8">8° Semestre</option>
                                    @endif

                                    @if (old('semester') == 9)
                                        <option value="9" selected="">Finalizado</option>
                                    @else
                                        <option value="9">Finalizado</option>
                                    @endif
                                </select>

                                @if ($errors->has('semester'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semester') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                            <label for="experience" class="col-md-4 control-label">Experiência com programação antes da graduação</label>

                            <div class="col-md-6">
                                Sim

                                @if (old('experience') == 1)
                                    <input name="experience" value="1" type="radio" checked="checked">
                                @else
                                    <input name="experience" value="1" type="radio">
                                @endif

                                Não

                                @if (old('experience') == 0)
                                    <input name="experience" value="0" type="radio" checked="checked">
                                @else
                                    <input name="experience" value="0" type="radio">
                                @endif

                                @if ($errors->has('experience'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('works') ? ' has-error' : '' }}">
                            <label for="works" class="col-md-4 control-label">Trabalha ou já trabalhou com programação</label>

                            <div class="col-md-6">
                                Sim

                                @if (old('works') == 1)
                                    <input name="works" value="1" type="radio" checked="checked">
                                @else
                                    <input name="works" value="1" type="radio">
                                @endif

                                Não

                                @if (old('works') == 0)
                                    <input name="works" value="0" type="radio" checked="checked">
                                @else
                                    <input name="works" value="0" type="radio">
                                @endif

                                @if ($errors->has('works'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('works') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
