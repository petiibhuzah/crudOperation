@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card shadow-lg pt-5 pb-5">
            <form action="{{route('store.role')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Role Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" value="{{$role->name}}"   disabled>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="desc" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-6">
                        <div class="card shadow-sm p-2">
                            {{$role->desc}}
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-5 offset-md-4">
                        <a href="{{route('home')}}">Back Home</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
