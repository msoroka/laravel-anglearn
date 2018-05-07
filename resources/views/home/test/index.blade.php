@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <a href="{{ url()->previous() }}">
                        <button type="button" class="btn btn-primary"> <- Powrot</button>
                    </a>
                    <h1 class="display-3">{{$package->name}}</h1>
                    <hr class="my-4">
                    {!! Form::open(['route' => 'result.store']) !!}
                    @foreach($package->word as $word)
                        <p class="lead">{{$word->word_pl}}
                            {{ Form::label('word[]', '-> po angielsku:')}}
                            {{ Form::text('word[]', null, array('class' => 'form-control'))}}
                            {{ Form::label('id[]', ' ')}}
                            {{ Form::text('id[]', $word->id, array('style' => 'display:none;'))}}

                        </p>
                    @endforeach
                    {{ Form::label('user_id', ' ')}}
                    {{ Form::text('user_id', Auth::user()->id, array('style' => 'display:none;'))}}
                    {{ Form::label('package_id', ' ')}}
                    {{ Form::text('package_id', $package->id, array('style' => 'display:none;'))}}
                    {{ Form::submit('Sprawdz', array('class' => 'btn-success btn-lg', 'style' => 'margin-top:25px;')) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
