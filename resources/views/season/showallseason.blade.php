@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <center><div class="panel-heading">GRAND ATMA HOTELS SEASON</div></center>

                <center>
                <form action="{{route('season.create')}}" method = "get">
                    <input type="submit" name="viewform" value="ADD">
                    {{csrf_field()}}
                </form>
                </center>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id</th>
                        <th>Id Price</th>
                        <th>Season Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Detail</th>
                        <th></th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr> 
                            <td><a href="{{ route('showallseason',$d->IdSeason) }}">{{ $d->IdSeason }}</a></td>
                            <td>{{ $d->IdPrice }}</td>
                            <td>{{ $d->SeasonName }}</td>
                            <td>{{ $d->StartDate}}</td>
                            <td>{{ $d->EndDate }}</td>
                            <td>{{ $d->Detail }}</td>
                            <td>
                            <div class="u-cf" style="float: left;display:inline-block;">
                                    <form action="{{route('season.edit',$d->IdSeason) }}" method = "get">
                                        <input type="submit" name="_method" value="edit">
                                        {{csrf_field()}}
                                    </form>
                            </div>
                            </td>
                            <td>
                            <div class="u-cf" style="float: right;display:inline-block;">
                                    <form action="{{route('season.destroy',$d->IdSeason) }}" method = "post">
                                        <input type="submit" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                     </form>
                            </div>
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