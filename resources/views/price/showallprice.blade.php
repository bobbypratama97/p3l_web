@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">GRAND ATMA HOTELS PRICE</div></center>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id Price</th>
                        <th>Price Nominal</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{ $d->IdPrice }}</a></td>
                            <td>{{ $d->PriceNominal }}</td>
                            <td>
                            <div class="u-cf" style="float: right;display:inline-block;">
                                <form action="/price/{{$d->IdPrice}}" method = "post">
                                    <input type="submit" name="_method" value="DELETE">
                                    {{csrf_field()}}
                                </form>
                            </div>
                    
                            </td>
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
