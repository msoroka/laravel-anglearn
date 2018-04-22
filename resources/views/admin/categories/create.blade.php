@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Dodaj nowa kategorie</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'categories.store']) !!}
                            {{ Form::label('name', 'Nazwa kategorii:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
                            {{ Form::label('description', 'Opis:')}}
                            {{ Form::text('description', null, array('class' => 'form-control'))}}
                            {{ Form::submit('Dodaj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
