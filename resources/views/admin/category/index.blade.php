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
                        <th scope="col">Nazwa</th>
                        <th scope="col">Opis</th>
                        <th scope="col" rowspan="2">Akcje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category -> name }}</td>
                            <td>{{ $category -> description }}</td>
                            <td>
                                @csrf
                                @if(Auth::user()->role_id == 1 )
                                    {{--<a href="#"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>--}}
                                    <div style="float:left;">
                                        {!! Form::open(array('route'=>['category.edit',$category->id], 'method'=>'GET')) !!}
                                        {!! Form::button('<i class="fas fa-edit"></i>',['class'=>'btn btn-success','type'=>'submit', 'style'=>'margin-right:-75px;']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    </td>
                                    <td>
                                    <div style="float:left; margin-left: 45px;">
                                        {!! Form::open(array('route'=>['category.destroy',$category->id],'method'=>'DELETE')) !!}
                                        {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
