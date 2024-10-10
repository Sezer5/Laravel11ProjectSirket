@extends('layouts.frontbasespecialsidebarless')

@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)
@section('icon', Storage::url($settings->icon))



@section('content')
    <div class="col-sm-12 padding-right">
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <form action="{{ route('user.shopcart.storeorder') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td colspan="3" style="border-bottom: 3px solid rgb(121, 120, 120)">
                            <h3>Order Form</h3>
                        </td>
                        <td colspan="1" style="border-bottom: 3px solid rgb(121, 120, 120)">
                            <h3>Total: $ {{$total}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="height:20px">
                        </td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="{{Auth::user()->name}}"></td>
                        <td>E-mail:</td>
                        <td><input type="text" name="email" value="{{Auth::user()->email}}"></td>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type="text" name="phone"></td>
                        <td>Address:</td>
                        <td>
                            <textarea name="address" cols="20" rows="3"></textarea>
                        </td>
                    </tr>
                    <input type="text" name="total" value="{{$total}}" hidden>
                    <tr>
                        <td>Card Holder:</td>
                        <td><input type="text" name="holder"></td>
                   
                        <td>Card Number:</td>
                        <td><input type="text" name="number"></td>
                    </tr>
                    <tr>
                        <td>Exp. Date:</td>
                        <td><input type="text" name="date"></td>
                    
                        <td>Security Code:</td>
                        <td><input type="text" name="code"></td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right"><button type="submit">Send</button></td>
                    </tr>
                </table>
            </form>
            
        </div><!--/category-products-->
    </div>
    </div>
    </div>

@endsection
