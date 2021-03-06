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
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">PL</th>
                            <th scope="col">EN</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($package->word as $word)
                            <tr>
                                <td width="50%"><p class="lead">{{$word->word_pl}}</p></td>
                                <td width="50%"><p class="lead">{{$word->word_en}}</p></td>

                            </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

