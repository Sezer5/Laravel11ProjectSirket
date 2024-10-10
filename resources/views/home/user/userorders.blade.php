@extends('layouts.frontbasespecialsidebarless')
@section('title', $settings->title)
@section('description', $settings->description)
@section('keywords', $settings->keywords)
@section('icon', Storage::url($settings->icon))
@section('content')
        <div class = "col-sm-3">
            <div class = "left-sidebar">
                @include('home.user.usermenu')
            </div>
        </div>
        <div class = "col-sm-9 padding-right">
            @include('home.messages')
            <h2  class = "title text-center">USER ORDERS</h2>
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Total</th>
                                
                                <th>Show</th>
                                
                            </tr>
                            @foreach ($data as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        {{ $rs->name }}
                                    </td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->total }}</td>
                                    
                                    <td><a href="{{ route('user.shopcart.user_order_details', ['id' => $rs->id]) }}"
                                            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
        </div>
    </div>
</div>
@endsection
