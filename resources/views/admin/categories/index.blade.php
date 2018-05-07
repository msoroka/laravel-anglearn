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
                        <th scope="col">nazwa</th>
                        <th scope="col">opis</th>
                        @if(Auth::user()->role_id == 1)
                            <th scope="col" rowspan="2">Akcje</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            @if(Auth::user()->role_id == 1)
                                <td>{{ $category->id }}</td>
                            @endif
                            <td>{{ $category -> name }}</td>
                            <td>{{ $category -> description }}</td>
                            <td>
                                @csrf
                                @if(Auth::user()->role_id == 1)
                                    {{--<a href="#"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>--}}
                                    <div style="float:left;">
                                        {!! Form::open(array('route'=>['categories.edit',$category->id], 'method'=>'GET')) !!}
                                        {!! Form::button('<i class="fas fa-edit"></i>',['class'=>'btn btn-success','type'=>'submit', 'style'=>'margin-right:-75px;']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    {{--</td>--}}
                                    {{--<td>--}}
                                    <div style="float:left; margin-left: 45px;">
                                        {!! Form::open(array('route'=>['categories.destroy',$category->id],'method'=>'DELETE')) !!}
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
        </div>
    </div>
@endsection
