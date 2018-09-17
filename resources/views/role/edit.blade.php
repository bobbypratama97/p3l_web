@extends('layouts.app')
@section('title','Edit Peran')

@section('content')
    <center><h1>Edit Peran!</h1></center>
    <center>
        <form action="{{route('role.update',$role->IdRole)}}" method="post">
            <input type="text" name="RoleName" value="{{$role->RoleName}}"><br><br>
            <textarea name="Detail" rows="8" cols="40">{{$role->Detail}}"</textarea><br><br>
    
            <input type="submit" name="submit" value="edit">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">


        </form>
     </center>

@endsection