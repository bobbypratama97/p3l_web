@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Add New RoomType!</h1></center>

    <center>
        <form action="{{ route('roomtype.store') }}" method = "post">
            <input type="number" name="IdRoomType" placeholder="IdRoomType"><br><br>
            <input type="number" name="IdPrice" placeholder="IdPrice"><br><br>
            <input type="text" name="RoomName" placeholder="Room Name"><br><br>
            <input type="text" name="RoomFacility" placeholder="Room Facility"><br><br>
            <input type="number" name="Smoking" placeholder="Smooking"><br><br>
            <input type="text" name="RoomDetail" placeholder="Room Detail"><br><br>

            <input type="submit" name="submit" value="add">
            {{csrf_field()}}

        </form>
    </center>

@endsection
