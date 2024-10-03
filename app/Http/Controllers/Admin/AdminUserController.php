<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=User::all();
        $data2=Role::all();
        return view("admin.user.index",[
            'data' => $data,
            'data2' => $data2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=User::find($id);
        return view("admin.user.show",[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uid,$rid)
    {
        //
        $user=User::find($uid);
        $user->roles()->detach($rid);#Many to Many relation delete related data
        return back();
    }

    public function addrole(Request $request)
    {
        //
        $data=new RoleUser();
        $data->user_id = $request->user_id;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect('admin/user');
    }

}
