@extends('layouts.app')
@section('content')
 <div class="container">
     <div class="card shadow-lg pt-5 pb-5">
         <form action="{{route('update.role',['id'=>$role->id])}}" method="post">
             @csrf
             <div class="form-group row">
                 <label for="name" class="col-md-4 col-form-label text-md-right">Role Name</label>

                 <div class="col-md-6">
                     <input id="name" type="text" class="form-control" name="name" value="{{$role->name}}" placeholder="ENTER NAME"  required autofocus>
                 </div>
             </div>


             <div class="form-group row">
                 <label for="desc" class="col-md-4 col-form-label text-md-right">Description</label>

                 <div class="col-md-6">
                     <textarea id="desc" name="desc" cols="15"   class="form-control" >{{$role->desc}}</textarea>
                 </div>
             </div>

             <div class="form-group row mb-0">
                 <div class="col-md-5 offset-md-4">
                     <button type="submit" class="btn btn-block btn-outline-secondary">Update Role</button>
                 </div>
             </div>

         </form>
     </div>
 </div>
@endsection



