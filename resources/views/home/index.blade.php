@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Komunikat</h1>
                    <hr class="my-4">
                    <p class="lead">TEST</p>
                </div>
            </div>
        </div>



@endsection
