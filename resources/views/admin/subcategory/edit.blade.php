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
                    <h1 class="display-4">Edytuj uzytkownika</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {{--{!! Form::open(['method'=>'PATCH', 'route' => 'users.update', $user->id]) !!}--}}

                            @csrf
                            {!! Form::model($user, [
                            'method' => 'PATCH',
                            'route' => ['users.update', $user->id]
                            ]) !!}
                            {{ Form::label('name', 'Imie:')}}
                            {{ Form::text('name', $user-> name, array('class' => 'form-control'))}}
                            @if(Auth::user()->role_id == 1)
                            {{ Form::label('email', 'E-Mail:')}}
                            {{ Form::email('email', $user-> email, array('class' => 'form-control'))}}
                            @else
                                <br>
                                <p>E-Mail: <strong>{{$user-> email}}</strong></p>
                            @endif
                            {{ Form::label('password', 'Nowe haslo:')}}
                            <br>
                            {{--<div style="margin-top:-25px;"></div>--}}
                            {{ Form::password('password', null, array('class' => 'form-control'))}}
                            <br>
                            @if(Auth::user()->role_id == 1)
                            {{ Form::label('role', 'Rola:') }}
                            <br>
                            <div style="margin-top:-25px;"></div>
                            {{ Form::select('role',[
                                'Administrator' => 'Administrator',
                                'Redaktor' => 'Redaktor',
                                'Super Redaktor' => 'Super Redaktor',
                                'Uzytkownik' => 'Uzytkownik'
                            ], 'Uzytkownik'), array('class' => 'form-control') }}
                            @endif
                            {{ Form::submit('Edytuj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
