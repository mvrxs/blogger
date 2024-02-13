@extends('adminlte::page')

@section('title', '{ DEV / }')

@section('content_header')
    <h1>Assign role</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ (session('info')) }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Name</p>
            <p class="form-control">{{ $user->name }}</p>

            <h2 class=h5>Role list</h2>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Role assign', ['class'=> 'btn btn-primary mt-3']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

{{-- https://github.com/jeroennoten/Laravel-AdminLTE/wiki/ --}}