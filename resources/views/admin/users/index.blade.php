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
                        <th scope="col">Rola</th>
                        <th scope="col" rowspan="2">Akcje</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user -> name }}</td>
                            <td>{{ $user -> email }}</td>
                            <td>{{ DB::table('roles')->where('id', $user->role_id )->value('name') }}</td>
                            <td>
                            {{--<a href="#"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>--}}
                            {!! Form::open(array('route'=>['users.edit',$user->id],'method'=>'EDIT')) !!}
                            {!! Form::button('<i class="fas fa-edit"></i>',['class'=>'btn btn-success','type'=>'submit']) !!}
                            {!! Form::close() !!}
                            {!! Form::open(array('route'=>['users.destroy',$user->id],'method'=>'DELETE')) !!}
                            {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit']) !!}
                            {!! Form::close() !!}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection
