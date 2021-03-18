<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);

        $role->save();

        return $role;
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        $roleUpdated = Role::find($id);
        $roleUpdated->update($request->all());

        return $roleUpdated;
        
    }


    public function destroy($id)
    {
        //
    }
}
