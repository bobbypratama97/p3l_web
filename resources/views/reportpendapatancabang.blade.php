@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHOW REPORT PENDAPATAN Cabang</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Name Branch</th>
                        <th>countPemesanan</th>
                        <th>total</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                          <td><a href="{{ route('reportpendapatancabang',$d->Name ) }}">{{ $d->Name }}</a></td>
                            <td>{{ $d->countPemesanan }}</td>
                            <td>{{ $d->total }}</td>
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
