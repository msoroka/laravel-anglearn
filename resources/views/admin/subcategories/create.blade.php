@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Dodaj nowa podkategorie</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'subcategories.store']) !!}
                            {{ Form::label('name', 'Nazwa podkategorii:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
                            {{ Form::label('description', 'Opis:')}}
                            {{ Form::text('description', null, array('class' => 'form-control'))}}
                            {{ Form::label('category', 'Nalezy do kategorii:') }}
                            <br>
                            <select class="form-control" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
