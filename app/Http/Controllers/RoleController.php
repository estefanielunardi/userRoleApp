<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
   
    public function index()
    {
        $roles = Role::all();
        return view('dashboard', compact('roles'));
    }

    
    public function create()
    {
        return view('createRoleForm');
    }

 
    public function store(Request $request)
    {
        $role = Role::create([
            'title' => $request->title,
        ]);

        $role->save();

        return redirect()->route('roles.index');
    }

   
    public function show($id)
    {
        $role = Role::find($id);
        return view('rolePage', compact('role'));
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, Role $role)
    {
        $role->title = $request->title;
        $role->save();
       
        return redirect()->route('roles.index');

    }


    public function destroy($id)
    {
        DB::table('roles')
        ->where('id', $id)
        ->delete();
        
        return redirect()->route('roles.index');
    }
}
