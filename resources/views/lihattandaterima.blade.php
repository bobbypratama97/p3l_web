@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Show Reciept</h1></center>

    <center>
    <form action="/showreciept/{idbooking}" method = "GET">
            <input type="text" name="idbooking" placeholder="Id Booking" ><br><br>
            <input type="submit" name="submit" value="Show">
            {{csrf_field()}}

    </form>
    </center>

@endsection