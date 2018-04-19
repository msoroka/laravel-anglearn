@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('partials.sidebar')
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Imie</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Akcje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> email }}</td>
                        <td><a href="#"><button type="button" class="btn btn-success">Edytuj</button></a>  <a href="#"><button type="button" class="btn btn-danger">Usun</button></a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
