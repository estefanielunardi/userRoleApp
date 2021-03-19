<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

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

   
    public function update(Request $request, Role $role)
    {
        $role->title = $request->title;

        $role->save();
       
        return back();

    }


    public function destroy($id)
    {
        DB::table('roles')
        ->where('id', $id)
        ->delete();
        
        return back();
    }
}
