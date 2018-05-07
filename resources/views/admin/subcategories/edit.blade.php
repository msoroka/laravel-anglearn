@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-primary"> <- Powrot</button></a>
                <br><br>
                <div class="jumbotron">
                    <h2 class="display-4">Edytuj podkategorie</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            @csrf
                            {!! Form::model($subcategory, [
                            'method' => 'PATCH',
                            'route' => ['subcategories.update', $subcategory->id]
                            ]) !!}
                            {{ Form::label('name', 'Nazwa podkategorii:')}}
                            {{ Form::text('name', $subcategory->name, array('class' => 'form-control'))}}
                            {{ Form::label('description', 'Opis:')}}
                            {{ Form::text('description', $subcategory->description, array('class' => 'form-control'))}}
                            {{ Form::label('category', 'Nalezy do kategorii:') }}
                            <br>
                            <select class="form-control" name="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
