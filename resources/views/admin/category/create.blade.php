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
                    <h1 class="display-4">Dodaj nowa kategorie:</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'category.store']) !!}
                            {{ Form::label('name', 'Nazwa:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
                            {{ Form::label('description', 'Opis:')}}
                            {{ Form::textarea('description', null, array('class' => 'form-control'))}}
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
