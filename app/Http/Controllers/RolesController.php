<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
   public function getCreateRolePage(){
       return view('createRole');
   }
   public function storeRole(Request $request){
       $this->validate($request,[
           'name'=>'required',
           'desc'=>'required'
       ]);

       $role = New Role();
       $role->name = $request->name;
       $role->desc = $request->desc;
       $role->save();

       return redirect()->route('home');
   }
   public function editRolePage($id){
       $role = Role::find($id);
       return view('editRole')->with([
           'role'=>$role
       ]);
   }
   public function updateRole(Request $request, $id){
       $role = Role::find($id);
       $this->validate($request,[
           'name'=>'required',
           'desc'=>'required'
       ]);

       $role->name = $request->name;
       $role->desc = $request->desc;
       $role->save();

       return redirect()->route('home');
   }
   public function viewRolePage($id){
       $role = Role::find($id);
       return view('viewRole')->with([
           'role'=>$role
       ]);
   }
   public function deleteRolePage($id){
       $role = Role::find($id);
       $role->delete();
       return redirect()->route('home');
   }
}
