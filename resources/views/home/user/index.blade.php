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
                    <table class="table table-bordered">
                        <tr>
                            <td><label class="form-control">Name:</label></td>
                            <td><input type="text" class="form-control" value="{{Auth::user()->name}}" name="name"></td>
                        </tr>
                        <tr>
                            <td><label class="form-control">E-mail:</label></td>
                            <td><input type="text" class="form-control" value="{{Auth::user()->email}}" name="email"></td>
                        </tr>
                        <tr>
                            <td><label class="form-control">Password:</label></td>
                            <td><input type="text" class="form-control" name="password"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: right">
                                <button type="submit" class="btn btn-default get">Send</button>
                            </td>
                        </tr>
                    </table>
                </form>
        </div>
    </div>
</div>
@endsection
