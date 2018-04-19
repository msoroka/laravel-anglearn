@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('partials.sidebar')
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-8">
                <div class="jumbotron">
                    <h1 class="display-4">Dodaj nowego uzytkownika</h1>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['route' => 'users.store']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
