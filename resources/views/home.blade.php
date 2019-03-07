@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Roles Management</div>

                <div class="card-body">


                        <div class="col-md-12">
                            <div class="row">
                                 {{--THE FIRST COL--}}
                                <div class="col-md-8">
                                    <table class="table table-responsive  table-light">
                                        <thead >
                                        <tr class="bg-dark text-white">
                                            <td><small>ID</small></td>
                                            <td><small>NAME</small></td>
                                            <td><small>DESC</small></td>
                                            <td><small></small></td>
                                            <td><small></small></td>
                                            <td><small></small></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($roles->count() > 0)
                                            @foreach($roles as $role)
                                               <tr>
                                                   <td><small>{{$role->id}}</small></td>
                                                   <td><small>{{$role->name}}</small></td>
                                                   <td><small>{{str_limit($role->desc,100)}}</small></td>
                                                   <td><small><a href="{{route('view.role',['id'=>$role->id])}}">View</a></small></td>
                                                   <td><small><a href="{{route('edit.role',['id'=>$role->id])}}">Edit</a></small></td>
                                                   <td><small><a href="{{route('delete.role',['id'=>$role->id])}}">Delete</a></small></td>
                                               </tr>
                                            @endforeach
                                        @else
                                            <tr><td><small>No data Found!</small></td></tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                {{--THE SECOND COL--}}
                                <div class="col-md-4">
                                 <a href="{{route('create.role')}}" class="btn btn-outline-secondary"><small>CREATE USER ROLE</small></a>



                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
