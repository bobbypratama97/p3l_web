@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ALL REGISTERED USER</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id User</th>
                        <th>Id Type</th>
                        <th>Id Role</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Institution Name</th>
                        <th>Identity Number</th>
                        <th>Phone Number</th>
                        <th>Email Address</th>
                        <th>Address</th>
                        <th>Username</th>
                        <th>Registration Date</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                        <td><a href="{{ route('showalluser',$d->IdUser ) }}">{{ $d->IdUser }}</a></td>
                           
                            <td>{{ $d->IdType }}</td>
                            <td>{{ $d->IdRole }}</td>
                            <td>{{ $d->FirstName }}</td>
                            <td>{{ $d->LastName }}</td>
                            <td>{{ $d->InstitutionName }}</td>
                            <td>{{ $d->IdentityNumber }}</td>
                            <td>{{ $d->PhoneNumber }}</td>
                            <td>{{ $d->EmailAddress }}</td>
                            <td>{{ $d->Address }}</td>
                            <td>{{ $d->Username }}</td>
                            <td>{{ $d->RegistrationDate }}</td>

                            
                            <
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