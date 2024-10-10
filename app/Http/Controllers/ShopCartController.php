<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Order;
use App\Models\Product;
use App\Models\Settings;
use App\Models\ShopCart;
use App\Models\OrderProduct;
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

    public function order(Request $request)
    {
        //
        $request->total;
       
        $total=$request->total;
        $settings=Settings::first();
        return view('home.order',[
            'settings'=>$settings,
            'total'=>$total,
        ]);
    }

    public function storeorder(Request $request)
    {
        #Get the credit card check we must write code here
        $cardcheck="True";
        if ($cardcheck=='True')
        {
            $data=new Order();
            $data->name=$request->input('name');
            $data->address=$request->input('address');
            $data->email=$request->input('email');
            $data->phone=$request->input('phone');
            $data->total=$request->input('total');
            $data->user_id=Auth::id();
            $data->Ip=$_SERVER['REMOTE_ADDR'];
            $data->save();
            $datalist=ShopCart::where('user_id',Auth::id())->get();
            foreach ($datalist as $rs){
                $data2=new OrderProduct();
                $data2->user_id=Auth::id();
                $data2->product_id=$rs->product_id;
                $data2->order_id=$data->id;
                $data2->price=$rs->product->price;
                $data2->quantity=$rs->quantity;
                $data2->amount=$rs->quantity * $rs->product->price;
                $data2->save();

            }
            $data3=ShopCart::where('user_id',Auth::id());
            $data3->delete();
            return redirect()->route('user.shopcart.user_orders')->with('success','Order Succeed');
        }else{
            return redirect()->back()->with('success','Order Not Completed');
        }

    }

    public function user_orders()
    {
        
        $settings=Settings::first();
        $data=Order::where('user_id',Auth::id())->get();
        return view('home.user.userorders',[
            'settings'=>$settings,
            'data'=>$data,
        ]);
    }

    public function user_order_details(string $id)
    {
        //
        $data=OrderProduct::where('order_id','=',$id)->get();
        $settings=Settings::first();
        return view('home.user.userordersdetails',[
            'settings'=>$settings,
            'data'=>$data,
        ]);
    }
}
