@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Dodaj nowe slowko</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'words.store']) !!}
                            {{ Form::label('word_en', 'Slowko po angielsku:')}}
                            {{ Form::text('word_en', null, array('class' => 'form-control'))}}
                            {{ Form::label('word_pl', 'Slowko po polsku:')}}
                            {{ Form::text('word_pl', null, array('class' => 'form-control'))}}
                            {{ Form::label('subcategory', 'Nalezy do podkategorii:') }}
                            <br>
                            <select class="form-control" name="subcategory">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }} -> {{ $subcategory->category->name }}</option>
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
