@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="{{ url()->previous() }}"><button type="button" class="btn btn-primary"> <- Powrot</button></a>
                <br><br>
                <div class="jumbotron">
                    <h2 class="display-4">Edytuj zestaw</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::model($package, [
                            'method' => 'PATCH',
                            'route' => ['packages.update', $package->id]
                            ]) !!}
                            {{ Form::label('name', 'Nazwa:')}}
                            {{ Form::text('name', $package->name, array('class' => 'form-control'))}}
                            {{ Form::label('subcategory', 'Podkategoria:') }}
                            <br>
                            <select class="form-control" name="subcategory">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                            </select>
                            {{ Form::label('words', 'Slowka: (sugerowana podkategoria)') }}
                            <br>
                            <select class="form-control select2-multi" name="words[]" multiple="multiple">
                                @foreach($words as $word)
                                    <option value="{{ $word->id }}">{{ $word->word_en }} -> {{ $word->word_pl }}
                                        ({{  $word->subcategory->name }})
                                    </option>
                                @endforeach
                            </select>
                            {{ Form::label('user', 'Uzytkownik:') }}
                            <select class="form-control" name="user">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
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
