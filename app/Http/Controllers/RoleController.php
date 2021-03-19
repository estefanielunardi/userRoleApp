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
            'title' => $request->title,
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
        $role = Role::find($id);
        $role->update($request->all());

        return $role;

        
    }


    public function destroy($id)
    {
        //
    }
}
