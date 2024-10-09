@extends('layouts.frontbasespecialsidebarless')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)
@section('icon', Storage::url($settings->icon))



@section('content')
<div class="col-sm-3">
    <div class="left-sidebar">
        @include('home.user.usermenu')
    </div>
</div>
    <div class="col-sm-9 padding-right">
            <section id="cart_items">
                    <h2 class = "title text-center">MY CART</h2>
                    <div class="table-responsive cart_info">
                        @include('home.messages')
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Item</td>
                                    <td class="description"></td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Total</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $grandtotal=0;
                                @endphp
                                @foreach ($data as $rs)
                                    
                                
                                    <tr>
                                        <td class="cart_product">
                                            <a href=""><img src="{{ Storage::url($rs->product->image) }}" style="width: 100px"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="">{{ $rs->product->title }}</a></h4>
                                            <p>{{ $rs->product->category->title }}</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>${{ $rs->product->price }}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <a class="cart_quantity_up" href="{{route('user.shopcart.quantityup',['id'=>$rs->id])}}"> + </a>
                                                <input class="cart_quantity_input" type="text" name="" value="{{ $rs->quantity }}" autocomplete="off" size="2">
                                                <a class="cart_quantity_down" href="{{route('user.shopcart.quantitydown',['id'=>$rs->id])}}"> - </a>
                                            </div>
                                        </td>
                                        @php
                                            $grandtotal=$grandtotal+($rs->product->price * $rs->quantity);
                                        @endphp
                                        <td class="cart_total">
                                            <p class="cart_total_price">${{ $rs->product->price * $rs->quantity }}</p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="{{route('user.shopcart.destroy',['id'=>$rs->id])}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
        
                                @endforeach
                                <tr>
                                    <td class="cart_product">
                                        <h2 class="title">Grand Total</h2>
                                    </td>
                                    <td class="cart_description">
                                        
                                    </td>
                                    <td class="cart_price">
                                       
                                    </td>
                                    <td class="cart_quantity">
                                        
                                    </td>
                                   
                                    <td class="cart_total">
                                            <p class="cart_total_price">${{ $grandtotal }}</p>
                                    </td>
                                    <td class="cart_delete">
                                        
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
            </section>
            
        
    </div>
    </div>
    </div>

@endsection
