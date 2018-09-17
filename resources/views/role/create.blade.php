@extends('layouts.app')
@section('content')

@section('content')
    <center><h1>Tambahkan Peran!</h1></center>

    <center>
        <form action="{{route('role.store')}}" method = "post">
            <input type="number" name="idrole"><br><br>
            <input type="text" name="rolename"><br><br>
            <textarea name="detail" rows="8" cols="40"></textarea><br><br>
            <input type="submit" name="submit" value="add">
            {{csrf_field()}}

        </form>
    </center>

@endsection