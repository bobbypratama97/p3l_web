@extends('layouts.app')
@section('title','Edit Season')

@section('content')
    <center><h1>Edit Season!</h1></center>
    <center>
        <form action="{{route('season.update', $season->IdSeason)}}" method="post">
            <input type="text" name="IdPrice" value="{{$season->IdPrice}}"><br><br>
            <input type="text" name="SeasonName" value="{{$season->SeasonName}}"><br><br>
            <input type="date" name="StartDate" value="{{$season->StartDate}}"><br><br>
            <input type="date" name="EndDate" value="{{$season->EndDate}}"><br><br>
            <textarea name="Detail" rows="8" cols="40">{{$season->Detail}}"</textarea><br><br>
            <input type="submit" name="submit" value="edit">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">


        </form>
     </center>

@endsection