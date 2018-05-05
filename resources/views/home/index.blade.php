@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Komunikat</h1>
                    <hr class="my-4">
                    @foreach($packages as $package)
                       {{ $package->name }}<a href="test/{{$package->id}}">Test </a><a href="learn/{{$package->id}}">Ucz sie</a>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
