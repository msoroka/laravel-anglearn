@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Dodaj nowego uzytkownika</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'users.store']) !!}
                            {{ Form::label('name', 'Imie:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
                            {{ Form::label('email', 'E-Mail:')}}
                            <br>
                            {{ Form::email('email', null, array('class' => 'form-control'))}}
                            {{ Form::label('password', 'Haslo:')}}
                            <br>
                            {{ Form::password('password', null, array('class' => 'form-control'))}}
                            <br>
                            {{ Form::label('role', 'Rola:') }}
                            <br>
                            <select class="form-control" name="role">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            {{ Form::submit('Dodaj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
