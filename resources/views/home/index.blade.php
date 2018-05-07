@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Witaj w AngLearn!</h1>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Nazwa Paczki</th>
                            <th scope="col">Zobacz Slowka</th>
                            <th scope="col">Test</th>
                            <th scope="col">Nauka</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($packages as $package)
                            <tr>
                                <td>{{ $package->name }}</td>
                                <td width="15%"><a href="package/{{$package->id}}"><button class="btn btn-info"><i class="fas fa-box"></i></button></a></td>
                                <td width="10%"><a href="test/{{$package->id}}"><button class="btn btn-danger"><i class="fas fa-percent"></i></button></a></td>
                                <td width="10%"><a href="learn/{{$package->id}}"><button class="btn btn-success"><i class="fas fa-book"></i></button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
