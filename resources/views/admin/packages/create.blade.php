@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="jumbotron">
                    <h2 class="display-4">Dodaj nowy zestaw</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            {!! Form::open(['route' => 'packages.store']) !!}
                            {{ Form::label('name', 'Nazwa:')}}
                            {{ Form::text('name', null, array('class' => 'form-control'))}}
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
                            @if(Auth::user()->role_id == 1)
                            {{ Form::label('user', 'Uzytkownik:') }}
                                <select class="form-control" name="user">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            @endif
                            @if(Auth::user()->role_id != 1)
                                {{ Form::label('user', 'Uzytkownik:') }}
                                <select class="form-control" name="user">
                                        {{--<option disabled value="{{ $user->id }}">{{ $user->name }}</option>--}}
                                        <option value="{{ Auth::user()->id }}" selected="selected">
                                            {{ Auth::user()->name }}
                                        </option>
                                </select>
                            @endif
                            {{ Form::submit('Dodaj', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
