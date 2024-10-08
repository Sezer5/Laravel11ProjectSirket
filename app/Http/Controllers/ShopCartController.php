<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{


    protected $appends = [
        'countcart'
    ];

     public static  function  countcart(){
         
        $number = DB::table('shop_carts')->where('user_id','=', Auth::id())->count();
        return  $number;
     }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $data=new ShopCart();
        $data->user_id = Auth::id();
        $data->product_id = $request->product_id;
        $data->quantity = $request->quantity;
        $data->save();
        return redirect()->back()->with('addproduct', 'Product Added');
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
}
