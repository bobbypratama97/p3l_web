@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHOW JENIS KAMAR DAN HARGA AVAILABLE</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Room Name</th>
                        <th>Room Facility</th>
                        <th>Room Detail</th>
                        <th>Price</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>   
                            <td>{{ $d->roomName }}</td>
                            <td>{{ $d->roomFacility }}</td>
                            <td>{{ $d->roomDetail }}</td>
                            <td>{{ $d->PriceNominal }}</td>
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