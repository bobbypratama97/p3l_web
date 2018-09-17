@extends('layouts.app')
@section('title','Edit Paid Service')

@section('content')
    <center><h1>Edit Paid Service!</h1></center>
    <center>
        <form action="{{route('paidservice.update',$paidservice->IdPaidService)}}" method="post">
            <input type="text" name="PaidServiceName" value="{{$paidservice->PaidServiceName}}"><br><br>
            <input type="text" name="PaidServicePrice" value="{{$paidservice->PaidServicePrice}}"><br><br>
            <textarea name="PaidServiceDetail" rows="8" cols="40">{{$paidservice->PaidServiceDetail}}"</textarea><br><br>
    
            <input type="submit" name="submit" value="edit">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
        </form>
     </center>

@endsection