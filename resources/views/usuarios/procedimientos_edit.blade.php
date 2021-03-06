@extends('app')

@section('content')
<h3>Editar usuario</h3>
{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsuariosController@procedimientos_update', $user->id]]) !!}
    
    <div class="form-group @if($errors->first('name')) has-error @endif">
        {!! Form::label('name', 'Nombre y Apellidos') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => '']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>

    <div class="form-group @if($errors->first('email')) has-error @endif">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required' => '', 'placeholder' => 'eg: foo@bar.com']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>

    <div class="form-group @if($errors->first('privilegios')) has-error @endif">
        {!! Form::label('privilegios', 'Tipo de Usuario') !!}
        {!! Form::select('privilegios', [0 => 'Tipo de Usuario', 5 => 'Analista Procedimiento'], null, ['id' => 'privilegios', 'class' => 'form-control', 'required' => '']) !!}
        <small class="text-danger">{{ $errors->first('privilegios') }}</small>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>
    
    <button type="submit" class="btn btn-success pull-right">Editar</button>
{!! Form::close() !!}
@endsection

@section('scripts')

@endsection