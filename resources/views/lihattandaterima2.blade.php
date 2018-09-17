@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TANDA TERIMA</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id Booking</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Check In Date</th>
                        <th>Check Out Date</th>
                        <th>Adult Quantity</th>
                        <th>Kids Quantity</th>
                        <th>Room Name</th>
                        <th>Room Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                        <th>Paid Service Name</th>
                        <th>Quantiy</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>   
                            <td>{{$d->IdBooking}}</td>
                            <td>{{$d->FirstName}}</td>
                            <td>{{$d->Address}}</td>
                            <td>{{$d->CheckInDate}}</td>
                            <td>{{$d->CheckOutDate}}</td>
                            <td>{{$d->AdultQuantity}}</td>
                            <td>{{$d->KidsQuantity}}</td>
                            <td>{{$d->RoomName}}</td>
                            <td>{{$d->RoomQuantity}}</td>
                            <td>{{$d->UnitPrice}}</td>
                            <td>{{$d->TotalPrice}}</td>
                            <td>{{$d->PaidServiceName}}</td>
                            <td>{{$d->Quantity}}</td>
                            
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