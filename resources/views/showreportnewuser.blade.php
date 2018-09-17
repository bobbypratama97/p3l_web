@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">SHOW REPORT</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id User</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                          <td><a href="{{ route('showreportnewuser',$d->IdUser ) }}">{{ $d->IdUser }}</a></td>
                            <td>{{ $d->FirstName }}</td>
                            <td>{{ $d->LastName }}</td>
                            <td>{{ $d->EmailAddress }}</td>
                            <td>{{ $d->RegistrationDate }}</td>
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
