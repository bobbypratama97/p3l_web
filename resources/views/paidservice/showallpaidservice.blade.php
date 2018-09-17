@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">GRAND ATMA HOTELS PAID SERVICE</div></center>

                <center>
                <form action="{{route('paidservice.create')}}" method = "get">
                    <input type="submit" name="viewform" value="ADD">
                    {{csrf_field()}}
                </form>
                </center>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id</th>
                        <th>Paid Service Name</th>
                        <th>Price</th>
                        <th>Detail</th>
                        <th>Option</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr> 
                            <td><a href="{{ route('showallpaidservice',$d->IdPaidService) }}">{{ $d->IdPaidService }}</a></td>
                            <td>{{ $d->PaidServiceName }}</td>
                            <td>{{ $d->PaidServicePrice }}</td>
                            <td>{{ $d->PaidServiceDetail }}</td>
                            <td>
                                <div class="u-cf" style="float: left">
                                        <form action="{{route('paidservice.edit',$d->IdPaidService)}}" method = "get">
                                            <input type="submit" name="_method" value="edit">
                                            {{csrf_field()}}
                                        </form>
                                </div>
                                <div class="u-cf" style="float: right">
                                        <form action="{{route('paidservice.destroy',$d->IdPaidService)}}" method = "post">
                                            <input type="submit" name="_method" value="DELETE">
                                            {{csrf_field()}}
                                        </form>
                                </div>
                            </td>
                            </div>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection