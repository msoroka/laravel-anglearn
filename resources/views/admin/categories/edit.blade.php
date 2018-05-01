@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-primary"> <- Powrot</button></a>
                <br><br>
                <div class="jumbotron">
                    <h2 class="display-4">Edytuj kategorie</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            @csrf
                            {!! Form::model($category, [
                            'method' => 'PATCH',
                            'route' => ['categories.update', $category->id]
                            ]) !!}
                            {{ Form::label('name', 'Nazwa:')}}
                            {{ Form::text('name', $category-> name, array('class' => 'form-control'))}}
                            {{ Form::label('description', 'Opis:')}}
                            {{ Form::text('description', $category-> description, array('class' => 'form-control'))}}

                            {{ Form::submit('Edytuj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
