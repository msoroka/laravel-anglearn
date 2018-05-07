@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Twoje dane:</h1>
                    <hr class="my-4">
                    <p class="lead">Imie: {{Auth::user()->name}}</p>
                    <p class="lead">Email: {{Auth::user()->email}}</p>
                    <p class="lead">Rola: {{Auth::user()->role->name}}</p>
                    <h1 class="display-3">Twoje rezultaty:</h1>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Nazwa paczki</th>
                            <th scope="col">Wynik</th>
                            <th scope="col">Data rozwiazania</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            @if($result->user_id == Auth::user()->id)
                                <tr>
                                    <td>{{ $result -> package->name }}</td>
                                    <td>{{ $result -> result }} %</td>
                                    <td>{{ $result -> created_at }}</td>
                                </tr>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
