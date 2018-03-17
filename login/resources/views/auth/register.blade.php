@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Capital Humano</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class=" col-md-4 form-group{{ $errors->has('numemp') ? ' has-error' : '' }}">
                            <label for="numemp" class="col-md-6 control-label">Numero de empleado</label>

                            <div class="col-md-10">
                                <input id="numemp" type="number" class="form-control" name="numemp" value="{{ old('numemp') }}" required autofocus>

                                @if ($errors->has('numemp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numemp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 form-group{{ $errors->has('prinom') ? ' has-error' : '' }}">
                            <label for="prinom" class="col-md-6 control-label">Primer nombre</label>

                            <div class="col-md-10">
                                <input id="prinom" type="text" class="form-control" name="prinom" value="{{ old('prinom') }}" required>

                                @if ($errors->has('prinom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prinom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 form-group{{ $errors->has('segnom') ? ' has-error' : '' }}">
                            <label for="segnom" class="col-md-6 control-label">Segundo nombre</label>


                            <div class="col-md-10">
                                <input id="segnom" type="text" class="form-control" name="segnom"  value="{{ old('segnom') }}" minlength="5" maxlength="5" required  >

                                @if ($errors->has('segnom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('segnom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="dir" class="col-md-6 control-label">Primer apellido</label>

                            <div class="col-md-10">
                                <input id="priap" type="text" class="form-control" name="priap" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="cod" class="col-md-6 control-label">Segundo apellido</label>

                            <div class="col-md-10">
                                <input id="segap" type="text" class="form-control" name="segap" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="esta" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="esta" type="text" class="form-control" name="esta" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="ciu" class="col-md-4 control-label">Ciudad</label>

                            <div class="col-md-6">
                                <input id="ciu" type="text" class="form-control" name="ciu" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="call" class="col-md-4 control-label">Calle</label>

                            <div class="col-md-6">
                                <input id="call" type="text" class="form-control" name="call" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="ext" class="col-md-3 control-label">No.Ext</label>

                            <div class="col-md-4">
                                <input id="ext" type="number" class="form-control" name="ext" required>
                            </div>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="inte" class="col-md-3 control-label">No.Int</label>

                            <div class="col-md-4">
                                <input id="inte" type="number" class="form-control" name="inte" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="cod" class="col-md-6 control-label">Codigo postal</label>

                            <div class="col-md-10">
                                <input id="cod" type="text" class="form-control" name="cod" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="pgw" class="col-md-6 control-label">Pagina</label>

                            <div class="col-md-10">
                                <input id="pgw" type="text" class="form-control" name="pgw" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="Tel" class="col-md-6 control-label">Tel</label>

                            <div class="col-md-10">
                                <input id="tel" type="text" class="form-control" name="tel" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="CURP" class="col-md-6 control-label">CURP</label>

                            <div class="col-md-10">
                                <input id="CURP" type="refe" class="form-control" name="CURP" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="Refe" class="col-md-6 control-label">Referencia</label>

                            <div class="col-md-10">
                                <input id="refe" type="text" class="form-control" name="refe" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="RFC" class="col-md-6 control-label">RFC</label>

                            <div class="col-md-10">
                                <input id="RFC" type="text" class="form-control" name="RCF" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="ss" class="col-md-6 control-label">No.SS</label>

                            <div class="col-md-10">
                                <input id="ss" type="number" class="form-control" name="ss" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="corr" class="col-md-6 control-label">Correo</label>

                            <div class="col-md-10">
                                <input id="corr" type="text" class="form-control" name="corr" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="password" class="col-md-6 control-label">Contraseña</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="password-confirm" class="col-md-6 control-label">Confirmar</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrado
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
