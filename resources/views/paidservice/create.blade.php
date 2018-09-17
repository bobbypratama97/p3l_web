@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Add new Paid Service!</h1></center>

    <center>
        <form action="{{route('paidservice.store')}}" method = "post">
            <input type="number" name="IdPaidService" placeholder="Paid Service Id"><br><br>
            <input type="text" name="PaidServiceName" placeholder="Paid Service Name"><br><br>
            <input type="text" name="PaidServicePrice" placeholder="Price"><br><br>
            <textarea name="PaidServiceDetail" rows="8" cols="40" placeholder="Detail"></textarea><br><br>

            <input type="submit" name="submit" value="add">
            {{csrf_field()}}

        </form>
    </center>

@endsection