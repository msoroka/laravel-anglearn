@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Edytuj slowko</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            @csrf
                            {!! Form::model($word, [
                            'method' => 'PATCH',
                            'route' => ['words.update', $word->id]
                            ]) !!}
                            {{ Form::label('word_en', 'Po angielsku:')}}
                            {{ Form::text('word_en', $word->word_en, array('class' => 'form-control'))}}
                            {{ Form::label('word_pl', 'Po polsku:')}}
                            {{ Form::text('word_pl', $word->word_pl, array('class' => 'form-control'))}}
                            {{ Form::label('subcategory', 'Nalezy do subcategory:') }}
                            <br>
                            <select class="form-control" name="subcategory">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }} -> {{ $subcategory->category->name }}</option>
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
