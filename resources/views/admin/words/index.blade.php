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
                        <th scope="col">en</th>
                        <th scope="col">pl</th>
                        <th scope="col">podkategoria</th>
                        @if(Auth::user()->role_id == 1)
                            <th scope="col" rowspan="2">Akcje</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($words as $word)
                        <tr>
                            @if(Auth::user()->role_id == 1)
                            <td>{{ $word->id }}</td>
                            @endif
                            <td>{{ $word -> word_en }}</td>
                            <td>{{ $word -> word_pl }}</td>
                            <td>{{ $word->subcategory->name }}
                                -> {{ $word->subcategory->category->name }}
                            </td>
                            <td>
                                @csrf
                                @if(Auth::user()->role_id == 1)
                                    {{--<a href="#"><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></a>--}}
                                    <div style="float:left;">
                                        {!! Form::open(array('route'=>['words.edit',$word->id], 'method'=>'GET')) !!}
                                        {!! Form::button('<i class="fas fa-edit"></i>',['class'=>'btn btn-success','type'=>'submit', 'style'=>'margin-right:-75px;']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    {{--</td>--}}
                                    {{--<td>--}}
                                    <div style="float:left; margin-left: 45px;">
                                        {!! Form::open(array('route'=>['words.destroy',$word->id],'method'=>'DELETE')) !!}
                                        {!! Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $words->links() }}
            </div>
        </div>
    </div>
@endsection
