@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">GRAND ATMA HOTELS PRICE</div></center>

                <center>
                <form action="{{ route('price.create') }}" method = "get">
                    <input type="submit" name="viewform" value="ADD">
                    {{csrf_field()}}
                </form>
                </center>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id RoomType</th>
                        <th>RoomName</th>
                        <th>PriceNominal</th>
                        <th></th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td><a href="{{ route('showall',$d->IdRoomType) }}">{{ $d->IdRoomType }}</a></td>
                            <td>{{ $d->RoomName }}</td>
                            <td>{{ $d->PriceNominal}}</td>
                            <td>
                            <div class="u-cf" style="float: left;display:inline-block;">
                                    <form action="/price/{{$d->IdRoomType}}/edit" method = "get">
                                        <input type="submit" name="_method" value="edit">
                                        {{csrf_field()}}
                                    </form>
                            </div>
                            </td>
                            <td>
                            <div class="u-cf" style="float: right;display:inline-block;">
                                    <form action="/price/{{$d->IdRoomType}}" method = "post">
                                        <input type="submit" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                     </form>
                            </div>
                    </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
