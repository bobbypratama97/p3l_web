@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ROLE</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <th>Id Role</th>
                        <th>Role Name</th>
                        <th>Detail</th>
                        <th>Option</th>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                        
                            <td>{{ $d->IdRole }}</a></td>
                            <td>{{ $d->RoleName }}</td>
                            <td>{{ $d->Detail }}</td>
                            <td>
                            <div style="float: left">
                                <div style="float: left">
                                    <form action="{{route('role.edit',$d->IdRole )}}" method = "get">
                                        <input type="submit" name="_method" value="edit">
                                        {{csrf_field()}}
                                    </form>
                            </div>
                                    
                            </div> 
                             <div style="float: right">
                                     <form action="{{route('role.destroy',$d->IdRole)}}" method = "post">
                                        <input type="submit" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                     </form>
                            </div>
                            </td>

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