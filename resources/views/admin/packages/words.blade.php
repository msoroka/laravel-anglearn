@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="{{ url()->previous() }}">
                    <button type="button" class="btn btn-primary"> <- Powrot</button>
                </a>
                <br><br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ENG</th>
                        <th scope="col">PL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($package->word as $word)
                        <tr>
                            <td>{{ $word-> word_en }}</td>
                            <td>{{ $word-> word_pl }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
