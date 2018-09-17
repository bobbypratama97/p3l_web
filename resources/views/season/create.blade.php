@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Add New Season!</h1></center>

    <center>
        <form action="{{ route('season.store') }}" method = "post">
            <input type="number" name="IdSeason" placeholder="Season Id"><br><br>
            <input type="number" name="IdPrice" placeholder="Price Id"><br><br>
            <input type="text" name="SeasonName" placeholder="Season Name"><br><br>
            <input type="date" name="StartDate" placeholder="Start Date"><br><br>
            <input type="date" name="EndDate" placeholder="End Date"><br><br>
            <textarea name="Detail" rows="8" cols="40" placeholder="Detail"></textarea><br><br>

            <input type="submit" name="submit" value="add">
            {{csrf_field()}}

        </form>
    </center>

@endsection