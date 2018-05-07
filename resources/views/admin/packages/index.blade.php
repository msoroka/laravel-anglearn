@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        @if(Auth::user()->role_id == 1)
                        <th scope="col">id</th>
                        @endif
                        <th scope="col">Nazwa</th>
                        <th scope="col">Podkategoria</th>
                        <th scope="col">Tworca</th>
                        {{--<th scope="col" rowspan="5">Slowka</th>--}}
                        @if(Auth::user()->role_id == 1)
                            <th scope="col" rowspan="3">Akcje</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($packages as $package)
                        <tr>
                            @if(Auth::user()->role_id == 1)
                            <td>{{ $package->id }}</td>
                            @endif
                            <td>{{ $package -> name }}</td>
                            <td>{{ $package -> subcategory -> name }}</td>
                            <td>{{ $package -> user -> name }}</td>
                            <td>
                                @csrf
                                @if(Auth::user()->role_id == 1 || Auth::user()->id == $package -> user_id)
                                    <div style="float:left;">
                                        {!! Form::open(array('route'=>['packages.edit',$package->id], 'method'=>'GET')) !!}
                                        {!! Form::button('<i class="fas fa-edit"></i>',['class'=>'btn btn-success','type'=>'submit', 'style'=>'margin-right:-75px;']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div style="float:left; margin-left: 45px;">
                                        {!! Form::open(array('route'=>['packages.destroy',$package->id],'method'=>'DELETE')) !!}
                                        {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div style="float:left; margin-left: 3px;">
                                        {!! Form::open(array('route'=>['packages.words' ,$package->id], 'method'=>'GET')) !!}
                                        {!! Form::button('<i class="fas fa-list-ul"></i>',['class'=>'btn btn-primary','type'=>'submit', 'style'=>'margin-right:-75px;']) !!}
                                        {!! Form::close() !!}
                                    </div>

                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
