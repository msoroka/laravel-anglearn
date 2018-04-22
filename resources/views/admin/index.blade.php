@extends('layouts.admin')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-3">Komunikat</h1>
                    <hr class="my-4">
                    <p class="lead">Witaj {{ Auth::user()->name }}</p>
                    <p class="lead">Twoja rola: {{ Auth::user()->role->name }}</p>
                </div>
            </div>
        </div>



@endsection
