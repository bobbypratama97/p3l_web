@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHOW REPORT JENIS KAMAR</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id User</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Id Booking</th>
                        <th>Room Name</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                          <td><a href="{{ route('reportjeniskamar',$d->IdUser ) }}">{{ $d->IdUser }}</a></td>
                            <td>{{ $d->FirstName }}</td>
                            <td>{{ $d->LastName }}</td>
                            <td>{{ $d->IdBooking }}</td>
                            <td>{{ $d->RoomName }}</td>
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
