<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\User;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $settings=Settings::first();
        return view('home.user.index',[
            'settings'=>$settings,
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
    public function destroy(string $id)
    {
        //
    }

    public function userprofileuptade(Request $request){
        $data=User::find(Auth::id());
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->back()->with('successprofile', 'User Updated');
    }

    public function reviews()
    {
        //
        
        $settings=Settings::first();
        $comments=Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.reviews',[
            'settings'=>$settings,
            'comments'=>$comments,
        ]);
    }

    public function showreviews(string $id)
    {
        //
        $data=Comment::find($id);
        $data->save();
        return view('home.user.showreviews',[
            'data'=>$data,
            
            
        ]);
    }
}
