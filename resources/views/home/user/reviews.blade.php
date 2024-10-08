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
            <h2  class = "title text-center">USER PANEL</h2>
                <form action="{{route('user.userprofileuptade')}}" method="POST">
                    @csrf
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Subject</th>
                                
                                <th>Show</th>
                                
                            </tr>
                            @foreach ($comments as $rs)
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>
                                        @if ($rs->user_id==NULL)
                                            <i class="fa fa-user"></i> Guest
                                        @else
                                            <i class="fa fa-user"></i> {{$rs->user->name}}
                                        @endif
                                    </td>
                                    <td>{{ $rs->product->title }}</td>
                                    <td>{{ $rs->subject }}</td>
                                    
                                    <td><a href="{{ route('user.showreviews', ['id' => $rs->id]) }}"
                                            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
        </div>
    </div>
</div>
@endsection
