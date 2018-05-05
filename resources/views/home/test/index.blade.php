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
                    @foreach($package->word as $word)
                        <p class="lead">{{$word->word_pl}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
