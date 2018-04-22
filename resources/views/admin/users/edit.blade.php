@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Edytuj uzytkownika</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            @csrf
                            {!! Form::model($user, [
                            'method' => 'PATCH',
                            'route' => ['users.update', $user->id]
                            ]) !!}
                            {{ Form::label('name', 'Imie:')}}
                            {{ Form::text('name', $user-> name, array('class' => 'form-control'))}}
                            <br>
                            <p>E-Mail: <strong>{{$user-> email}}</strong> (zmiana wymaga edycji w bazie danych)</p>
                            {{ Form::label('password', 'Nowe haslo:')}}
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
                            {{ Form::submit('Edytuj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
