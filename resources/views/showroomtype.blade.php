@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">VIEW JENIS KAMAR BESERTA DETAIL NYA</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id RoomType</th>
                        <th>Id Price</th>
                        <th>Room Name</th>
                        <th>Room Facility</th>
                        <th>Smoking</th>
                        <th>Room Detail</th>
                        <th>Image Link</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                        <td><a href="{{ route('showroomtype',$d->IdRoomType ) }}">{{ $d->IdRoomType }}</a></td>
                           
                            <td>{{ $d->IdPrice }}</td>
                            <td>{{ $d->RoomName }}</td>
                            <td>{{ $d->RoomFacility }}</td>
                            <td>{{ $d->Smoking }}</td>
                            <td>{{ $d->RoomDetail }}</td>
                            <td>{{ $d->ImageLink }}</td>
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