@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHOW HISTORY RESERVATION</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>IdBooking</th>
                        <th>CheckInDate</th>
                        <th>CheckOutDate</th>
                        <th>RoomName</th>
                        <th>TotalPrice</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td><a href="{{ route('showhistory',$d->IdUser ) }}">{{ $d->IdBooking }}</a></td>
                            <td>{{ $d->CheckInDate }}</td>
                            <td>{{ $d->CheckOutDate }}</td>
                            <td>{{ $d->RoomName }}</td>
                            <td>{{ $d->TotalPrice }}</td>
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
