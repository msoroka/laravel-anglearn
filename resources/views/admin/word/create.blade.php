@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('partials.sidebar')
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-8">
                <div class="jumbotron">
                    <h1 class="display-4">Dodaj nowego uzytkownika</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'users.store']) !!}
                            {{ Form::label('name', 'Imie:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
                            {{ Form::label('email', 'E-Mail:')}}
                            <br>
                            {{ Form::email('email', null, array('class' => 'disabled'))}}
                            <br>
                            {{ Form::label('password', 'Haslo:')}}
                            <br>
                            {{ Form::password('password', null, array('class' => 'form-control'))}}
                            <br>
                            {{ Form::label('role', 'Rola:') }}
                            <br>
                            <div style="margin-top:-25px;"></div>
                            {{ Form::select('role',[
                                'Administrator' => 'Administrator',
                                'Redaktor' => 'Redaktor',
                                'Super Redaktor' => 'Super Redaktor',
                                'Uzytkownik' => 'Uzytkownik'
                            ], 'Uzytkownik'), array('class' => 'form-control') }}
                            {{ Form::submit('Dodaj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection