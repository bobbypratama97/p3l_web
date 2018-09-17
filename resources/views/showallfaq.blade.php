@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">FREQUENTLY ASKED QUESTION</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                        <td><a href="{{ route('showallfaq',$d->IdFaq ) }}">{{ $d->IdFaq }}</a></td>
                           
                            <td>{{ $d->IdFaq }}</td>
                            <td>{{ $d->Question }}</td>
                            <td>{{ $d->Answer }}</td>                
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