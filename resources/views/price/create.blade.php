@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Add New Price!</h1></center>

    <center>
        <form action="{{ route('price.store') }}" method = "post">
            <input type="number" name="IdPrice" placeholder="Price Id"><br><br>
            <input type="text" name="PriceNominal" placeholder="Price"><br><br>

            <input type="submit" name="submit" value="add">
            {{csrf_field()}}

        </form>
    </center>

@endsection
