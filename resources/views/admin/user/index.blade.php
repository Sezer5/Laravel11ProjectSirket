@extends('layouts.adminbase')

@section('title', 'User List')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class = "content-wrapper">
        <!-- Content Header (Page header) -->
        <section class = "content-header">
        <div     class = "container-fluid">
        <div     class = "row mb-2">
        <div     class = "col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class = "col-sm-6">
                    <ol  class = "breadcrumb float-sm-right">
                    <li  class = "breadcrumb-item"><a href = "{{route('admin.index')}}">Home</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class = "content">

            <!-- Default box -->
            <div class = "card">
            <div class = "card-header">
                    {{-- <h3 class="card-title">Title</h3>

                    <div    class = "card-tools">
                    <button type  = "button" class = "btn btn-tool" data-card-widget = "collapse" title = "Collapse">
                    <i      class = "fas fa-minus"></i>
                        </button>
                        <button type  = "button" class = "btn btn-tool" data-card-widget = "remove" title = "Remove">
                        <i      class = "fas fa-times"></i>
                        </button>
                    </div> --}}
                </div>
                <div class = "card-body">
                <div class = "row">

                        <div   class = "col-md-12">
                        <div   class = "box">
                        <table class = "table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style = "width: 10px">Id</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Roles</th>
                                            <th>Show</th>
                                            <th>Add Role</th>
                                        </tr>
                                        @foreach ($data as $rs)
                                            <tr>
                                                <td>
                                                    {{$rs->id}}
                                                </td>
                                                <td>
                                                    {{$rs->name}}
                                                </td>
                                                <td>
                                                    {{$rs->email}}
                                                </td>
                                                <td>
                                                    @foreach($rs->roles as $role)
                                                        {{$role->name}} <a href = "{{route('admin.user.destroy',['uid'=>$rs->id,'rid'=>$role->id])}}">X</a><br>
                                                    @endforeach
                                                </td>
                                                   
                                                <td>
                                                    <a href    = "{{route('admin.user.show',['id'=>$rs->id])}}"
                                                       onclick = "return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                                                >Show</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.user.addrole')}}" method="POST">
                                                        @csrf
                                                        <table>
                                                            <input type="text" name="user_id" value="{{$rs->id}}" hidden>
                                                            <tr>
                                                                <td>
                                                                    <select name="role_id">
                                                                        @foreach ($data2 as $ks)
                                                                            <option value="{{$ks->id}}">{{$ks->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                    
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class = "card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
