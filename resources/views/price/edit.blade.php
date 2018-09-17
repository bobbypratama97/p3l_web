@extends('layouts.app')
@section('title','Edit Season')

@section('content')
    <center><h1>Edit Price!</h1></center>
    <center>
        <form action="{{route('season.update', $roomtype->IdRoomType)}}" method="post">
            <input type="number" name="IdPrice" value="{{$roomtype->IdPrice}}"><br><br>
            <input type="text" name="RoomName" value="{{$roomtype->RoomName}}"><br><br>


            <input type="submit" name="submit" value="edit">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">


        </form>
     </center>

@endsection
