<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
use App\Models\Settings;
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
         
        $number = DB::table('shop_carts')->where('user_id','=', Auth::id())->sum('quantity');
        return  $number;
     }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //echo "Index Function!";
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();
        $products=Product::all();
        $faq=Faq::all();
        $settings=Settings::first();
        $data = ShopCart::where('user_id','=', Auth::id())->get();
        return view('home.user.shopcart',[
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
            'products'=>$products,
            'settings'=>$settings,
            'faq'=>$faq,
            'data'=>$data,
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
        $data=ShopCart::where('product_id',$request->product_id)->where('user_id',Auth::id())->first();
        if($data){
            $data->quantity=$data->quantity+$request->quantity;
        }else{
            $data=new ShopCart();
            $data->user_id = Auth::id();
            $data->product_id = $request->product_id;
            $data->quantity = $request->quantity;
        }
       
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
        $data=ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('delproduct', 'Product Deleted');
    }

    public function quantityup(string $id)
    {
        //
        $data=ShopCart::find($id);
        $data->quantity = $data->quantity + 1;
        $data->save();
        return redirect()->back();
    }

    public function quantitydown(string $id)
    {
        //
        $data=ShopCart::find($id);
        $data->quantity = $data->quantity - 1;
        $data->save();
        return redirect()->back();
    }
}
